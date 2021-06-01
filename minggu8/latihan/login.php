<?php
ob_start();
session_start();
    include "konek.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['nama'] = $qry['nama'];
        $_SESSION['hak'] = $qry['hak'];
        header("location:home.php");
    }
    else{
        ?>
        <?php
        header("location:index.php?pesan=gagal");
    }
?>