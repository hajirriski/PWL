<?php
include "koneksi.php";
include "pbo02.inc.php";
$query = $db->prepare("SELECT * FROM tb_mahasiswa");
$query->execute();
$data = $query->fetchAll();
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
if (isset($_POST['submit'])) {
  $nim = htmlentities($_POST['txtnim']);
  $nama = htmlentities($_POST['txtnama']);
  $alamat = htmlentities($_POST['txtalamat']);
  $query = $db->prepare("INSERT INTO `tb_mahasiswa`(`nim`,`nama`, `alamat`)
  VALUES (:nim,:nama,:alamat)");
  $query->bindParam(":nim", $nim);
  $query->bindParam(":nama", $nama);
  $query->bindParam(":alamat", $alamat);
  $query->execute();
  header("location: pbo03.php");
}
echo "</body></html>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan CRUD PDO</title>
</head>
<body>
<h2><strong><p align="center">Data Mahasiswa</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" >NIM</td>
    <td width="175" align="center" valign="middle" >Nama</td>
    <td width="250" align="center" valign="middle" >Alamat</td>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" ><?php echo $value['nim'] ?></td>
                    <td p align="left"><?php echo $value['nama'] ?></td>
                    <td p align="left"><?php echo $value['alamat'] ?></td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>
</body>
</html>