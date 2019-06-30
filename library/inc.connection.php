<?php
include "mysql_mysqli.inc.php";
# Konek ke Web Server Lokal
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "root";
$myDbs	= "klinik_apotekdb"; // nama database, disesuaikan dengan database di MySQL

# Konek ke Web Server Lokal
$koneksidb	= mysqli_connect($myHost, $myUser, $myPass, $myDbs) or die ("gagal, database tidak ditemukan");
?>