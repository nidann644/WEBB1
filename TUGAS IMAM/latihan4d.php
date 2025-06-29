<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4d</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<?php
// Array multidimensi: negara => [ibukota, kode telepon]
$asean = array(
    "Indonesia" => ["D.K.I. Jakarta", "+62"],
    "Singapura" => ["Singapura", "+65"],
    "Malaysia"  => ["Kuala Lumpur", "+60"],
    "Brunei"    => ["Bandar Seri Begawan", "+673"],
    "Thailand"  => ["Bangkok", "+66"],
    "Laos"      => ["Vientiane", "+856"],
    "Filipina"  => ["Manila", "+63"],
    "Myanmar"   => ["Naypyidaw", "+95"]
);

// Tampilkan dalam bentuk tabel HTML
echo "<strong>Daftar Negara ASEAN dan Ibukota :</strong><br><br>";
echo "<table>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($asean as $negara => $data) {
    echo "<tr>";
    echo "<td>$negara</td>";
    echo "<td>{$data[0]}</td>";
    echo "<td>{$data[1]}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
