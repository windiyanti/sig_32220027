<?php
include('koneksi.php');

// Memastikan nomor lokasi di-pass melalui POST
if (isset($_POST['nomor'])) {
    $nomor = $_POST['nomor'];

    // Query untuk menghapus lokasi berdasarkan nomor
    $query = "DELETE FROM kordinat_gis WHERE nomor = ?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameter dan execute
    mysqli_stmt_bind_param($stmt, 'i', $nomor);

    if (mysqli_stmt_execute($stmt)) {
        echo "success"; // Memberikan respon sukses jika berhasil dihapus
    } else {
        echo "error"; // Jika ada kesalahan dalam menghapus
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
}

// Tutup koneksi
mysqli_close($conn);
