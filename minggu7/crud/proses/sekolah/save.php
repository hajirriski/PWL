<?php
include '../../../conf.php';
include '../../../conn.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $logo = "";
  if ($_FILES['logo']['tmp_name'] != "") {
    $tmp_logo = $_FILES['logo']['tmp_name'];
    $logo = $_FILES['logo']['name'];
    move_uploaded_file($tmp_logo, "../../assets/foto/" . $logo);
  }
  $simpan = $koneksi->prepare("insert into sekolah (nama,alamat,logo) values ('$nama','$alamat','$logo');");
  $simpan->execute();
  header("location:../../../index.php?p=sekolah");
}
?>