<?php


//Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın. (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function orderly($arr, $num=1){
    $cleaned = array_filter($arr, function($e){return $e != "" && $e != NULL ? $e : false;});

   $randomKeys = array_rand($cleaned, $num);

  $newArr = [];
   foreach($randomKeys as $k){
    $newArr[] = $cleaned[$k];
   }
   return $newArr;
}



echo "<pre>";
print_r(orderly($planets, 3))

?>