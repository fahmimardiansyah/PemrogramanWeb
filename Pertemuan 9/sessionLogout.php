<!-- Praktikum Bagian 10. Penerapan Session pada Fitur Login -->
<?php
    // Memulai session
    session_start();

    // Menghapus session
    session_destroy();

    // Menampilkan pesan bahwa pengguna berhasil logout
    echo "Anda berhasil logout.";
?>