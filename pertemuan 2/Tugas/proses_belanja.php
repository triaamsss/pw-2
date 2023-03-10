<?php
if (isset($_GET['submit'])) {
    $customer = $_GET['customer'];
    $produk = $_GET['produk'];
    $jumlah = $_GET['jumlah'];
    $tv = 4200000;
    $kulkas = 3100000;
    $mesin = 3800000;

    echo "Nama Customer : $customer <br>";
    echo "Produk Pilihan : $produk <br>";
    echo "Jumlah Beli : $jumlah <br>";
    echo "Total Belanja : ";

    if ($produk == "tv") {
        echo $jumlah * $tv;
    } elseif ($produk == "kulkas") {
        echo $jumlah * $kulkas;
    } elseif ($produk == "mesin") {
        echo $jumlah * $mesin;
    }
}
