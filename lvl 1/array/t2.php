<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek bil terbesar</title>
</head>
<body>
<center>Cek bilangan terbesar</center>
<form action="#" method="post">
Bilangan Pertama : <input type="number" name="bil1" Placeholder="Masukan bilangan ke-1"><br><br/>

Bilangan Kedua : <input type="number" name="bil2" Placeholder="Masukan bilangan ke-2"><br><br/>

Bilangan Ketiga : <input type="number" name="bil3" Placeholder="Masukan bilangan ke-3"><br><br/>
<input type="submit" Value="CEK"><br><br/>
</form>

<?php
if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {
    $bil1 = $_POST ['bil1'];
    $bil2 = $_POST ['bil2'];
    $bil3 = $_POST ['bil3'];
    $nilai = array($bil1, $bil2, $bil3);
    $max= max($nilai);
    
    echo "Angka terbesarnya adalah " . $max;
}
?>