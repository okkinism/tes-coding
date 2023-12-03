<?php 

function gabungString($a, $b)
{
    // menggunakan strpos guna memeriksa apakah a berisi b?
    if (strpos($a, $b) !== false) {
        // jika iya, maka kembalikan b di awal dan a di akhir
        return $b . $a;
    } else {
        // jika tidak, tambahkan b di akhir a dan kembalikan hasilnya
        return $a . $b;
    }

    // contoh lain menggunakan ternary
    // return strpos($a, $b) !== false ? $b . $a : $a . $b;
}

// contoh penggunaan
$hasil1 = gabungString(' think, therefore I am', 'I');
$hasil2 = gabungString('cheese', 'cake');

echo $hasil1 . "\n";
echo $hasil2 . "\n";