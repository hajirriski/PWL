<html>
<head><title>Proses Form</title></head>
<body>
    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .baris{background-color:#000000;border-color:#000000;color:#ffffff;font-family:Arial, Helvetica, sans-serif !important;;
    font-weight:bold;text-align:left;vertical-align:top}
    .tg .kolom1{background-color:#c0c0c0;font-weight:bold;text-align:left;vertical-align:top}
    .tg .kolom{background-color:#c0c0c0;text-align:left;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
    <tr>
        <th class="baris">Program<br>Studi</th>
        <th class="baris">NIM</th>
        <th class="baris">Nilai Akhir</th>
        <th class="baris">STATUS</th>
        <th class="baris">Catatan Khusus</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="kolom1">
            <?php
            if (isset($_POST['SIMPAN'])) {
                $prodi = $_POST['prodi'];
                if ($prodi == "A11"){
                    echo "Teknik Informatika S1";
                } if ($prodi == "A12"){
                    echo "Sistem Informasi S1";
                } if ($prodi == "A22"){
                    echo "Teknik Informatika D3";
                }
            }
            ?>
        </td>
        <td class="kolom">
        <?php
            if (isset($_POST['SIMPAN'])){
                $nim = $_POST['nim'];
                echo "$nim";
            }
        ?>
        </td>
        <td class="kolom">
        <?php
            if (isset($_POST['SIMPAN'])){
                $tugas = $_POST['nilai_tugas'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $na = (0.4*$tugas) + (0.3*$uts) + (0.3*$uas);
                echo "$na ";
                $status="A";
                if ($na > 84){
                    $status = "(A)";
                    echo "$status";
                } elseif ($na <= 84 && $na >= 70){
                    $status = "(B)";
                    echo "$status";
                } elseif ($na <= 69 && $na >= 60){
                    $status = "(C)";
                    echo "$status";
                } elseif ($na <= 59 && $na >= 50){
                    $status = "(D)";
                    echo "$status";
                } else {
                    $status = "(E)";
                    echo "$status";
                }
            }
        ?>
        </td>
        <td class="kolom">
        <?php
            if ($na >= 60){
                echo "LULUS";
            } else{
                echo "TIDAK LULUS";
            }
        ?>
        </td>
        <td class="kolom">
            <ul>
                <li>
                <?php
                    if (isset($_POST['cat1'])){
                    echo $_POST['cat1'];
                    }
                ?>
                </li>
                <li>
                <?php
                    if (isset($_POST['cat2'])){
                    echo $_POST['cat2'];
                    }
                ?>
                </li>
                <li>
                <?php
                    if (isset($_POST['cat3'])){
                    echo $_POST['cat3'];
                    }
                ?>
                </li>
            </ul>
        </td>
    </tr>
    </tbody>
    </table>
</body>
</html>