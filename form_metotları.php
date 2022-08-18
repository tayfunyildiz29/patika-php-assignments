<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division by 3</title>
</head>
<body>

<h2>Patika.dev PHP Form Metotları Ödevi</h2>
<p>
Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
Boş değer gönderilirse değerin boş olmayacağını bildirin.
</p>
<small>3'e bölünebilirliğini kontrol etmek istediğiniz sayıyı giriniz</small>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
   <input type="number" name = "number">
   <button type="submit">Kontrol Et</button>
</form>

<?php
function checkBy3($num){
    
    $closest = $num + 3-$num%3;
    return  $num%3 == 0 ? "Girdiğiniz sayı: $num.<br>3'e bölünebilir" : "Girdiğiniz sayı: $num.<br>3'e bölünemez. $num sayısından sonraki 3'e bölünebilen ilk değer: $closest";
}

echo "<pre>";

if (count($_POST)!= 0){
    if (strlen($_POST["number"]) !=0){
        $number = intval($_POST["number"]);
        echo checkBy3($number);
    }else {echo "Sayı değeri boş olamaz";}

}




?>
    
</body>
</html>