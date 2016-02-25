<?php
$num=0;
for($n=1000; $n>1; $n/=2){
    echo $n . '<br>' . '<br>';
    $num++;
    if($n < 50){
        
        
        break;
        
    }
       
    
}
echo $num;

?>