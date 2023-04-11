<?php
    include("konfigurasi.php");

    $cnn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
       $tble = "tbmatakuliah";
       $sql = "CREATE TABLE  $tble(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           kode_mk VARCHAR(8),
           matakuliah VARCHAR(50),
           sks INT
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
