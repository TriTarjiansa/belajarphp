<?php
    echo "
        <marquee>
            <h1> Tri Tarjiansa - Siswa</h1>
        </marquee>
    ";
    //variable
    $nama = "Tri Tarjiansa";
    $kelas = "XI RPL 2";
    $nilai = 91.98;

    //
    echo "nama : ".$nama;
    echo "<br>";
    echo "kelas: ".$kelas;
    echo "<br>";
    echo "nilai : $nilai";
    echo "<br>";

    //Operator Jumlah
    echo "<br><br>";
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "Hasil dari penjumlahan : $hasil";

    //Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 9;
    $tinggi = 37;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus : $rumus";

    //Rumus lingkaran
    echo "<br><br>";
    $phi =3.14;
    $r= 7;

    $lingkaran =$phi * $r * $r ;

    echo "Hasil Luas lingkaran : $lingkaran";

    //Rumus volume balok
    echo "<br><br>";
    $p= 41;
    $l= 11;
    $t= 26;

    $volume_balok = $p * $l * $t;
    echo "Hasil Volume Balok : $volume_balok";
?>