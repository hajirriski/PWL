<?php
session_start();
include 'konek.php';
$data = mysqli_query($koneksi,"select * from minggu8");
($d = mysqli_fetch_array($data));
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    if ($user == $d['username'] && $pass = $d['password']) {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session02.php'> di sini (session02.php)</a> untuk menuju ke halaman pemeriksaan session";
    } else {
        echo "username atau password SALAH <br>";
        echo "Klik <a href='session01.php'> di sini </a> untuk coba lagi" ;
    }
} else {
    ?>
        <html>
            <head>
                <title>Login here...</title>
            </head>
            <body>
            <form action="" method="post">
                <h2>Login Here...</h2>
                Username : <input type="text" name="user"><br>
                Password : <input type="password" name="pass"><br>
                <input type="submit" name="Login" value="Log In">
            </form>
            </body>
            </html>
            <?php
    } 
    ?>