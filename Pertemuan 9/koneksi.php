<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

//mengoneksikan pada database yang sudah tersedia
$conn = mysqli_connect($servername, $username, $password, $dbname);

//warning apabila $con atau isi didalamnya tidak tersedia
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
