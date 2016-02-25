<?php 

$day = date("N");

$arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

foreach($arr as $k => $ar){
    
    if($day == $k){
        
        echo '<i>' . $ar . '</i>' . '<br>';
    }else{
        
    echo $ar . '<br>';
    }
       }




?>