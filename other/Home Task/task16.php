<?php 
$arr = array(1,2,3,4,5,6,7,8,9);

foreach($arr as $ar){
    
    if($ar <= 3){
        
        echo $ar;
        if($ar==3){
            
            echo '<br>';
        }
        
    }elseif($ar > 3 and $ar <= 6){
        
        echo $ar;
        if($ar==6){
            
            echo '<br>';
        }
    }else{
        
        echo $ar;
        
    }
    
}
    

?>