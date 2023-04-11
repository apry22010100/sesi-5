<?php
    include("konfigurasi.php");

    $cnn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
       $tble = "tbMHS";
       $sql = "CREATE TABLE  $tble(
           id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           nama VARCHAR(35),
           nim VARCHAR(10),
           alamat VARCHAR(255),
           telp VARCHAR(15),
           Prodi VARCHAR(25),
           Jeniskelamin VARCHAR(2),
           tgllahir date
       )";
       $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan tabel " . $tble . "Sukses";
        }else{
            echo "pembuatan tabel" . $tble . "Gagal";
        }
    }else{
        echo "koneksi ke mysql Gagal";
    }
