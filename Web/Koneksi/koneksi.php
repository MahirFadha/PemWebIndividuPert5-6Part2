<?php

$hostname = "172.17.8.83";
$port = 5432;
$username = "postgres";
$password = "Mahir";
$database = "PemWebWebsite";

$koneksi = pg_connect("host=$hostname port=$port dbname=$database user=$username password=$password");

if ($koneksi) {
    echo "Koneksi Succes";
} else {
    echo "Koneksi Error";
}
