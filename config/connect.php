<?php

// buat koneksi dengan MySQL, gunakan database: universitas
$mysqli = new mysqli("localhost", "root", "","grafika");

// cek koneksi
if ($mysqli->connect_errno) {
   die('Koneksi Error: '.$mysqli->connect_errno.
   ' - '. $mysqli->connect_error);
}
