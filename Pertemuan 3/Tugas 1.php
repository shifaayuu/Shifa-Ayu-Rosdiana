<?php
    $namaBarang = "Printer Laserjet 1001";
    $kode = "P001";
    $kategori = "Elektronik";
    $hargaBarang = 50000;
    $jumlahBarang = 3;

    $totalHarga = $hargaBarang * $jumlahBarang;

    if($totalHarga > 100000){
         $totalHarga = $hargaBarang * $jumlahBarang - 50000;
    }else{
        $totalHarga = $hargaBarang * $jumlahBarang;
    }

    echo "<h1>=====Program Menghitung Pembelian Produk====<br /></h1>";
    echo "Nama Barang : $namaBarang <br /> Kategori : $kategori <br /> Harga Barang : $hargaBarang <br /> Jumlah Barang : $jumlahBarang <br /> Total Harga : $totalHarga <br /> Status : <span style = 'color : green'>Sudah Bayar</span>";
    
?>