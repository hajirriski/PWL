<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Masukkan angka:<br>  
    <input type="angka" name="angka" id="angka">  
    <input type="submit" name="submit" value="Submit" />  
</form>

<?php
if ($_POST){
    $temp = 1;
    $angka = $_POST['angka'];
    $i = 1; 
    do{
        $temp = $temp * $i;
        $i++;
    } while ($i <= $angka);
    echo "Faktorial dari $angka! = $temp ";
} 
?>
</body>
</html>

