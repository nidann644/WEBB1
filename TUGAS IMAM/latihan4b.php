<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4b</title>
</head>
<body>

<?php
// Array awal berisi 5 negara ASEAN
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

// Tampilkan array awal dalam bentuk list HTML
echo "<strong>Daftar Negara ASEAN awal :</strong>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Tambahkan 3 negara baru ke dalam array
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Tampilkan array baru setelah penambahan elemen
echo "<strong>Daftar Negara ASEAN baru :</strong>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>
