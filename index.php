<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center h-screen">
    <h1 class="text-2xl font-bold mb-5">Negara-negara di Asia Tenggara</h1>
    <table id="countryTable" class="table-auto w-full mt-10 bg-white rounded-lg shadow-md">
        <thead>
            <tr class="text-gray-700 text-left bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Region</th>
                <th class="px-4 py-2">Sub Region</th>
                <th class="px-4 py-2">Languages</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
        </tbody>
    </table>

    <script>
        fetch('https://restcountries.com/v3.1/subregion/South-Eastern Asia')
            .then(response => response.json())
            .then(data => {
                let table = document.getElementById('countryTable');
                data.forEach((country, index) => {
                    let row = table.insertRow();
                    let nameCell = row.insertCell();
                    let regionCell = row.insertCell();
                    let subRegionCell = row.insertCell();
                    let languagesCell = row.insertCell();

                    row.className = index % 2 === 0 ? 'bg-gray-100' : '';

                    nameCell.textContent = country.name.common;
                    regionCell.textContent = country.region;
                    subRegionCell.textContent = country.subregion;
                    languagesCell.textContent = Object.values(country.languages).join(', ');

                    nameCell.className = "px-4 py-2";
                    regionCell.className = "px-4 py-2";
                    subRegionCell.className = "px-4 py-2";
                    languagesCell.className = "px-4 py-2";
                });
            });
    </script>
</body>
</html>