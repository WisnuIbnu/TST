
        const endpoint = "http://wisnujarkom.com:8000/api/siswa";

        const fetchData = async () => {
            try {
                const response = await fetch(endpoint);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const result = await response.json();
                console.log(result); 
                const data = result.data || []; 
                renderData(data);
            } catch (error) {
                console.error("Fetch error:", error);
            }
        };

        const renderData = (data) => {
            const dataList = document.getElementById("dataList");
            dataList.innerHTML = "";

            if (!Array.isArray(data)) {
                console.error("Data is not an array:", data);
                return;
            }

            data.forEach((item, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${index + 1}</td> 
                    <td>${item.nama}</td>
                    <td>${item.tempat_lahir}</td>
                    <td>${item.tanggal_lahir}</td>
                    <td>${item.alamat}</td>
                    <td>${item.asal_sekolah}</td>
                    <td>${item.no_hp}</td>
                `;
                dataList.appendChild(row);
            });
        };

 
        document.getElementById("dataForm").addEventListener("submit", async (e) => {
            e.preventDefault();
            const id = document.getElementById("id").value;
            const method = id ? "PUT" : "POST";  // Use PUT for update
            const url = id ? `${endpoint}/${id}` : endpoint;

            const formData = new FormData(e.target);
            const jsonData = Object.fromEntries(formData.entries());

            try {
                const response = await fetch(url, {
                    method,
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(jsonData),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                e.target.reset();
                fetchData(); 
            } catch (error) {
                console.error("Error updating data:", error);
            }
        });

        fetchData();
