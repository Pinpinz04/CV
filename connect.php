<?php
$Hostname = 'localhost';
$User     = 'pinpin';
$Password = '0502';
$Database = 'cv';

$connection = mysqli_connect($Hostname, $User, $Password, $Database);
if (!$connection) {
    die("maaf anda gagal terhubung") . mysqli_connect();
}
