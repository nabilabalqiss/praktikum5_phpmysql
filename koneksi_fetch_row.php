<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Koneksi database dengan mysqli_fetch_assoc</h1>
    <?php 
    $conn=mysqli_connect("localhost","root","","db_saya") or die ("koneksi gagal");
    $hasil=mysqli_query($conn,"SELECT * FROM liga");
    while ($row=mysqli_fetch_array($hasil)) {
        echo " Liga ".$row["1"];
        echo " mempunyai ".$row["2"];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>
</html>