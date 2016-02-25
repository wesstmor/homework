<?php 

$arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

foreach($arr as $ar){
    
    if($ar == 'Sunday' or $ar == 'Saturday'){
        
        echo '<b>' . $ar . '</b>' . '<br>';
    }else{
        
    echo $ar . '<br>';
    }
       }




?>