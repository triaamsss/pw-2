<?php
require_once '../dbkoneksi.php';

// Menangkap id iddel dari url
$id = $_GET['iddel'];

$dbh->query("delete from kartu where id=$id");

header('location:index.php');

?>