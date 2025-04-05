<?php

$hostname = "172.17.8.83";
$username = "postgres";
$password = "Mahir";
$database = "PemWebWebsite";

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil";
} catch (PDOException $e) {
    echo "Koneksi Gagal " . $e->getMessage();
}
