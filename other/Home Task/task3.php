<?php 

$arr=array(26, 17, 136, 12, 79, 15);

foreach ($arr as $ar) {
    
    $res = $ar * $ar;
    $newAr[] = $res;
    
}


echo array_sum($newAr);



?>