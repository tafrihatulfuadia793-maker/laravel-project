<?php

$host = env('DB_HOST');
$user = env('DB_USERNAME');
$password = env('DB_PASSWORD');
$database = env('DB_DATABASE');
$port = env('DB_PORT');

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Koneksi gagal : " . mysqli_connect_error());
}