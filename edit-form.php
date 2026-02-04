<?php
include 'connection.php';

// ambil nis sebagai acuan yang akan mau di edit, seperti tombol edit di setiap kolom data tabel
$nis = $_GET['nis'];

// ambil data lama 
$query = "SELECT * FROM siswa WHERE NIS='$nis'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// proses update
if (isset($_POST['submit'])) {
    $nama          = $_POST['nama'];
    $alamat        = $_POST['alamat'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk            = $_POST['jenis_kelamin'];
    $agama         = $_POST['agama'];

    $update = "UPDATE siswa SET
                NAMA='$nama',
                ALAMAT='$alamat',
                TEMPAT_LAHIR='$tempat_lahir',
                TANGGAL_LAHIR='$tanggal_lahir',
                JENIS_KELAMIN='$jk',
                AGAMA='$agama'
               WHERE NIS='$nis'";

    mysqli_query($conn, $update);

    echo "Data berhasil diupdate";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form method="post">
    NIS <br>
    <input type="text" value="<?= $row['NIS'] ?>" disabled><br><br>

    Nama <br>
    <input type="text" name="nama" value="<?= $row['NAMA'] ?>" required><br><br>

    Alamat <br>
    <input type="text" name="alamat" value="<?= $row['ALAMAT'] ?>" required><br><br>

    Tempat Lahir <br>
    <input type="text" name="tempat_lahir" value="<?= $row['TEMPAT_LAHIR'] ?>" required><br><br>

    Tanggal Lahir <br>
    <input type="date" name="tanggal_lahir" value="<?= $row['TANGGAL_LAHIR'] ?>" required><br><br>

    Jenis Kelamin <br>
    <select name="jenis_kelamin">
        <option value="L" <?= $row['JENIS_KELAMIN']=='L' ? 'selected' : '' ?>>L</option>
        <option value="P" <?= $row['JENIS_KELAMIN']=='P' ? 'selected' : '' ?>>P</option>
    </select><br><br>

    Agama <br>
    <input type="text" name="agama" value="<?= $row['AGAMA'] ?>" required><br><br>

    <button type="submit" name="submit">Update</button>
</form>

<a href="index.php"> <button>home<button> </a>

</body>
</html>
