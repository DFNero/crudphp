<?php
include 'connection.php'; // bentukan nya seperti import, fungsi nya mengimport fungsional dari koneksi.php ke index.php 

$query = "select * from siswa";
$result = mysqli_query($conn, $query); 
/*
    mysqli_query() digunakan untuk menjalankan perintah SQL ke database.
    $conn berfungsi sebagai koneksi ke database,
    $query untuk perintah SQL yang dikirim.
    Hasil dari eksekusi query tersebut disimpan ke dalam variabel $result.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>READ TABLE</title>
</head>
<body>

<h1>data siswa</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>tools</th>
    </tr>

    <!-- 
    mysqli_fetch_assoc() digunakan untuk mengambil satu baris data hasil query
    dalam bentuk array asosiatif dari variabel $result.
    Perulangan while digunakan untuk menampilkan data secara berulang
    hingga seluruh data pada tabel database selesai ditampilkan.
    -->
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['NIS'] ?></td>
        <td><?= $row['NAMA'] ?></td>
        <td><?= $row['ALAMAT'] ?></td>
        <td><?= $row['TEMPAT_LAHIR'] ?></td>
        <td><?= $row['TANGGAL_LAHIR'] ?></td>
        <td><?= $row['JENIS_KELAMIN'] ?></td>
        <td><?= $row['AGAMA'] ?></td>
        <td>
            <a href="edit-form.php?nis=<?= $row['NIS'] ?>">Edit</a>
            <a href="delete.php?nis=<?= $row['NIS'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

<a href="create-form.php"> <button> create <button> </a>
</body>
</html>