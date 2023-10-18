<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$negara=$_POST['negara'];
$conn = mysqli_connect("localhost", "root", "", "db_saya") or die("koneksi gagal");
$hasil = mysqli_query($conn, "SELECT * FROM liga WHERE negara='$negara'");

 if($negara==$row["negara"]) {
    echo "Negara yang ada cari ada";
 } else{
    echo "Negara yang ada cari tidak ada";
 }

?>
</body>
</html>