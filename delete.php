<?php
include 'connection.php';

// 1. Ambil NIS dari URL, method (GET) untuk mengambil data
$nis = $_GET['nis'];

// 2. Query delete
$query = "DELETE FROM siswa WHERE NIS = '$nis'";

// 3. Eksekusi query
$hapus = mysqli_query($conn, $query);

// 4. Cek hasil
if ($hapus) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location='index.php';
          </script>";
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}

