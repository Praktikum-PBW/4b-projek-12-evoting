<?php
    if (isset($_POST['daftar'])) {

        session_start();

        include 'libraries/koneksidatabase.php';

        $id_usr     = $_POST['id_usr'];
        $nm_usr     = $_POST['nm_usr'];
        $email      = $_POST['email'];
        $pass       = $_POST['pass'];
        $jns_usr    = $_POST['jns_usr'];
        
        // // check terbaca atau tidak ketika klik simpan
        // echo $id_usr;
        // echo $nm_usr;
        // echo $email;
        // echo $pass;
        // echo $jns_usr;
    
        // password jadi pass encrypsy
        $pass = sha1($pass);
    
        $query=mysqli_query($koneksi, "INSERT INTO user VALUES('$id_usr','$nm_usr','$email','$pass','$jns_usr')");

        $data = mysqli_fetch_array($query);

        // (mengecheck jumlah data) jika data ada sama dengan 1
        if (mysqli_num_rows($query) == 1) {

        /* cara 1 - pop up :
         echo ("<script>alert('User Account ditemukan');history.go(-1);</script>");
        */
        
        // jika data ditemukan

        $_SESSION['id_usr'] = $data['id_usr'];
        $_SESSION['nm_usr'] = $data['nm_usr'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['pass'] = $data['pass'];
        $_SESSION['jns_usr'] = $data['jns_usr'];

        // mengirim data menggnakan session pada folder back file index
        header("Location: back/index.php");
        } 
        //   jika data tidak ditemukan
        else {

        // kembali ke halaman login
        header("Location: loginregist.php"); 
         }
    }
?>