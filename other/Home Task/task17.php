<?php 

$month = date("F");

$arr = array('January', 'February','March','April','May','June','July','August','September','October','November','December');

foreach($arr as $ar){
    
    if($ar==$month){
        
        echo '<b>' . $ar . '</b>' . '<br>';
    }else{
        
    echo $ar . '<br>';
    }
}

?>