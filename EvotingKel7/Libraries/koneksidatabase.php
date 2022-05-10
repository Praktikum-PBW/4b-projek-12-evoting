<?php
//1. Membuat variabel - INFORMASI PHPMYADMIN
    
    //user account di phpmyadmin
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";

    //database di phpmyadmin
    $db_name = "evoting";
    

//2. Membuat Koneksi - Panggil Fungtion MYSQLi_connect
        
    //Parameter:"HOSTname, USERname, Password, Database"
        $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//3. Membuat Perulangan - MEMASTIKAN KONEKSI TEHUBUNG
/*
    if($koneksi) { 
        //jika koneksi berhasil :
            // Cara 1 - Pop Up
                echo "<script type='text/javascript'>
                alert('Koneksi ke server database Berhasil Terhubung!');history.go(-1);
                </script>";

            //     Cara 2 - Kalimat
            //     echo "Koneksi MYSQL dengan PHP : BERHASIL";

    } else {
        //jika koneksi tidak berhasil :       
            // Cara 1 - Pop Up
                echo "<script type='text/javascript'>
                alert('Koneksi ke server database Gagal Terhubung!');history.go(-1);
                </script>";

            
            //     Cara 2 - Kalimat
            //     echo "Koneksi MYSQL dengan PHP : GAGAL";      
    }
*/
?>