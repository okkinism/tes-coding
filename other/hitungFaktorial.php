<?php
function hitungFaktorial($angka)
{
    // jika angka adalah 0 atau 1, kembalikan 1
    if ($angka == 0 || $angka == 1){
        return 1;
    } else {
        // jika angka lebih besar dari 1, hitung dengan rekursi
        // n! = n × (n − 1) × (n − 2) × … × 2 × 1
        return $angka * hitungFaktorial($angka - 1);
    }
}

$bilangan = 2;
echo "Fatorial dari bilangan $bilangan adalah: " . hitungFaktorial($bilangan);