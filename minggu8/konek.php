<?php
$engi = "mysql";
$host = "localhost";
$dbse = "minggu8";
$user = "root";
$pass = "";
$konek = new PDO("myssql:host=$host;dbname=$dbse, $user, $pass");
//$koneksi = mysqli_connect($host, $user, $pass, $dbse);
if (!$konek){
        die("Connection Failed:".mysqli_connect_error());
}
?>
