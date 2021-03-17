<?php
$i = 1;
while ($i <= 5){
    $j = 1;
    while ($j <= 5){
        if ($i > $j){
            echo "$i";
        }
        $j++;
    }
    echo "$i<br>";
    $i++;
}
?>
