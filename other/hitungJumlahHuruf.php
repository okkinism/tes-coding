<?php
function hitungJumlahHuruf($kata)
{
    // "/[^a-zA-Z]/" mencocokan semua karakter dan "" sebagai mengganti string yg k
    $bukanKata = preg_replace("/[^a-zA-Z]/", "", $kata);
    
    return strlen($bukanKata);
}

$kata1 = "Tahu diri is better!";
echo "Jumlah kalimat 'kata' adalah: " . hitungJumlahHuruf($kata1);