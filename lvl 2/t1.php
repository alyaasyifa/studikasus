<?php
$bilangan = array(); //inisialisasi array untuk menampung bilangan
for ($i = 1; $i <= 100; $i++) {
    echo $bilangan[$i] = rand(1, 1000); //menambahkan bilangan acak ke array
    echo "<br>";
}

$max = $bilangan[1]; //inisialisasi variabel max dengan bilangan pertama

//melakukan iterasi pada array dan memperbarui variabel max jika ada bilangan yang lebih besar
for ($i = 2; $i <= 100; $i++) {
    if ($bilangan[$i] > $max) {
        $max = $bilangan[$i];
    }
}

echo "Bilangan terbesar adalah: " . $max;
?>

