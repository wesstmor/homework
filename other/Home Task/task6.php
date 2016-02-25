<?php

$arr=array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
    
foreach($arr as $key => $value){
    
    $en = array_keys($arr);
    
    $ru = array($arr['green'], $arr['red'], $arr['blue']);
    
    
}



print_r($en);
print_r($ru);
?>