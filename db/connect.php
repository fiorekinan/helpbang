<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$db         = "pengaduan_new";

$conn = mysqli_connect($host, $username, $password, $db);

if(mysqli_connect_errno()) {
    echo "gagal terhubung ke server: " . mysqli_connect_errno();
}
?>