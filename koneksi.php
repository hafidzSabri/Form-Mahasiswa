<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sbdl";
    $conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}