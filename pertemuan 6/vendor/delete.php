<?php 
require_once '../dbkoneksi.php';

// menangkap id iddel dari url
$_iddel=$_GET['iddel'];

$sql="DELETE FROM vendor WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);

header('location:index.php');

?>