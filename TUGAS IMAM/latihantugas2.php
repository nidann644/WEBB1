<!DOCTYPE html>
<html>
<head>
    <title>Tugas2.php</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Data Flora dan Fauna Terancam Punah</h2>

<?php
$hewan_terancam = [
    [
        "nama" => "Badak Jawa",
        "jenis" => "Fauna",
        "habitat" => "Ujung Kulon, Banten",
        "status" => "Kritis",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Rhinoceros_sondaicus_in_London_Zoo.jpg/640px-Rhinoceros_sondaicus_in_London_Zoo.jpg"
    ],
    [
        "nama" => "Harimau Sumatera",
        "jenis" => "Fauna",
        "habitat" => "Pulau Sumatera",
        "status" => "Kritis",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/0/00/Sumatran_Tiger_-_Panthera_tigris_sumatrae.jpg"
    ],
    [
        "nama" => "Orangutan Kalimantan",
        "jenis" => "Fauna",
        "habitat" => "Kalimantan",
        "status" => "Terancam",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/23/Bornean_Orangutan.jpg"
    ],
    [
        "nama" => "Elang Jawa",
        "jenis" => "Fauna",
        "habitat" => "Jawa",
        "status" => "Kritis",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/6/6c/Spizaetus_bartelsi.jpg"
    ],
    [
        "nama" => "Bekantan",
        "jenis" => "Fauna",
        "habitat" => "Kalimantan",
        "status" => "Terancam",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/1/1c/Proboscis_monkey_%28Nasalis_larvatus%29_male_Labuk_Bay.jpg"
    ],
    [
        "nama" => "Rafflesia Arnoldii",
        "jenis" => "Flora",
        "habitat" => "Bengkulu",
        "status" => "Langka",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/1/12/Rafflesia_arnoldii_Bengkulu.jpg"
    ],
    [
        "nama" => "Bunga Bangkai (Titan Arum)",
        "jenis" => "Flora",
        "habitat" => "Sumatera",
        "status" => "Langka",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/4/45/Amorphophallus_titanum1.jpg"
    ],
    [
        "nama" => "Anoa",
        "jenis" => "Fauna",
        "habitat" => "Sulawesi",
        "status" => "Terancam",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/2e/Anoa_at_Taman_Safari.jpg"
    ],
    [
        "nama" => "Kakatua Jambul Kuning",
        "jenis" => "Fauna",
        "habitat" => "NTT, Bali",
        "status" => "Kritis",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/1/1b/Yellow-crested_Cockatoo_%28Cacatua_sulphurea%29.jpg"
    ],
    [
        "nama" => "Jalak Bali",
        "jenis" => "Fauna",
        "habitat" => "Bali",
        "status" => "Kritis",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/3/3f/Jalak_Bali.jpg"
    ]
];

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Habitat</th>
        <th>Status</th>
        <th>Gambar</th>
      </tr>";

$no = 1;
foreach ($hewan_terancam as $data) {
    echo "<tr>";
    echo "<td>{$no}</td>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['jenis']}</td>";
    echo "<td>{$data['habitat']}</td>";
    echo "<td>{$data['status']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
    $no++;
}

echo "</table>";
?>

</body>
</html>
