<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4c</title>
</head>
<body>

<?php
// Associative array negara dan ibukotanya
$asean = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

// Menampilkan isi array menggunakan foreach
echo "<strong>Daftar Negara ASEAN dan Ibukota :</strong>";
echo "<ul>";
foreach ($asean as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>

</body>
</html>
