<?php
ob_start();
session_start();
?>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
    <h2 class="big-logo">Form Login</h2>
    <br>
    <form action="login.php" method="POST"class="margin-bottom-0">
        <table>
            <tr>
                <td width="80">Username</td>
                <td><input type="text" name="username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
<br>
<?php
    if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
    }
?>
</html>
