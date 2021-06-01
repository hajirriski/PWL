<?php
ob_start();
session_start();
?>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <br>
    <form action="login.php?op=in" method="POST"class="margin-bottom-0">
        <table border="0" cellpadding="4">
            <tr>
                <td width="80">Username</td>
                <td width="200"><input type="text" size="30" maxlength="32" name="username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" size="30" maxlength="255" name="password" required /></td>
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
