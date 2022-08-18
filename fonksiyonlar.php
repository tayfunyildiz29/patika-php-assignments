<?php

error_reporting(E_ALL);
//Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon yazın. Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın.

function drawTriangle($line){
    for($i =0; $i<$line; $i++){
        $j =0;
        $str = "";
        while ($j<=$i){
            $str .= "$line";
            $j++;
        }
        //$str = str_pad($str, $line*2, "_", STR_PAD_BOTH);
        echo $str."<br>";   
    }
}
    

drawTriangle(50);

function f($sayi)
{
    $sayi2 = 2;
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo f(3) * f(2);

?>