<?php
    include("konfigurasi.php");

    $cnn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
       $tble = "tbUSER";
       $sql = "CREATE TABLE  $tble(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(30) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(20),
            passkey VARCHAR(255),
            iduser VARCHAR(255)
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
