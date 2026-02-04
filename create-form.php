<?php
include 'connection.php';

// isset ini nyambung ke form itu dengan method POST (POST adalah metode MENGIRIM data ke database, ada 4 method umum: GET, POST, PUT, DELETE)
if (isset($_POST['submit'])) {

    $nis           = $_POST['nis'];
    $nama          = $_POST['nama'];
    $alamat        = $_POST['alamat'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk            = $_POST['jenis_kelamin'];
    $agama         = $_POST['agama'];

    $query = "INSERT INTO siswa 
              (NIS, NAMA, ALAMAT, TEMPAT_LAHIR, TANGGAL_LAHIR, JENIS_KELAMIN, AGAMA)
              VALUES
              ('$nis','$nama','$alamat','$tempat_lahir','$tanggal_lahir','$jk','$agama')";

    mysqli_query($conn, $query);

    echo "Data berhasil ditambahkan";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<!-- form di kasih method post karena kita "mengirim" data -->
<form method="post">

    NIS <br> <!-- attribute tag (name="..") ini berfungsi untuk deklarasi tag sebagai varible dan di panggil ke php code yang di atas ( liat bagian $_POST[] )-->
    <input type="text" name="nis" required><br><br>

    Nama <br>
    <input type="text" name="nama" required><br><br>

    Alamat <br>
    <input type="text" name="alamat" required><br><br>

    Tempat Lahir <br>
    <input type="text" name="tempat_lahir" required><br><br>

    Tanggal Lahir <br>
    <input type="date" name="tanggal_lahir" required><br><br>

    Jenis Kelamin <br>
    <select name="jenis_kelamin">
        <option value="L">L</option>
        <option value="P">P</option>
    </select><br><br>

    Agama <br>
    <input type="text" name="agama" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

<a href="index.php"> <button>home<button> </a>

</body>
</html>
