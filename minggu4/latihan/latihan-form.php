<html>
<head><title>Pengolahan Form</title></head>
    <body>
    <FORM ACTION="proses-form.php" METHOD="POST" NAME="input">
    <table border="1" cellpadding="8">
        <tr>
            <td>NIM</td>
            <td>
                <input type="text" name="nim">
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>
                <select name="prodi">
                <option value="A11">A11</option>
                <option value="A12">A12</option>
                <option value="A22">A22</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>NILAI TUGAS</td>
            <td>
                <input type="number" min="0" max="100" name="nilai_tugas">
            </td>
        </tr>
        <tr>
            <td>NILAI UTS</td>
            <td>
                <input type="number" min="0" max="100" name="nilai_uts">
            </td>
        </tr>
        <tr>
            <td>NILAI UAS</td>
            <td>
                <input type="number" min="0" max="100" name="nilai_uas">
            </td>
        </tr>
        <tr>
            <td>Catatan Khusus</td>
            <td>
                <input type="checkbox" name="cat1" value="Kehadiran >= 70 %">Kehadiran >= 70 %<br>
                <input type="checkbox" name="cat2" value="interaktif dikelas">Interaktif dikelas<br>
                <input type="checkbox" name="cat3" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas<br>
            </td>
        </tr>
    </table>
    <input type="submit" name="SIMPAN" value="SIMPAN">
    </FORM>
    </body>
</html>
