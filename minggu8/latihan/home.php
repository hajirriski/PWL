<?php
ob_start();
session_start();
if(!isset($_SESSION['username'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");
}
include "konek.php";
?>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
    <h2>Welcome ...!</h2>
    <?php
        $tampilNama = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$_SESSION[username]'");
        $nama = mysqli_fetch_array($tampilNama);
    ?>
        Selamat datang, <?php echo $nama['nama']; ?>! anda telah login.
        <tr height="80">
            <td></td>
            <td><a href="logout.php">Logout</a></td>
            <td></td>
        </tr>
    </table>
</body>
</html>