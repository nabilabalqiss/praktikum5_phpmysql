<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $conn = mysqli_connect("localhost", "root", "", "db_saya") or die("koneksi gagal");
 $hasil = mysqli_query($conn, "SELECT * FROM login WHERE password");
        $username=$_POST["username"];
        $password=$_POST["password"];
        $row = mysqli_fetch_array($hasil); // Mengambil data pada kolom field
        if ($username == $row["Username"] && $password == $row["Password"]) {
            echo "Anda Berhasil Login";
        }else {
            echo "Anda Gagal Login";
        }
?>
</body>
</html>