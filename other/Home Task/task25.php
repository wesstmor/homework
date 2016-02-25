<?php               
   
$newarr = array();

 for($i=1; $i<=5; $i++){
     
     array_push($newarr, rand(0, 199));
     
 }

  print_r($newarr);
  echo  $a = min($newarr);
  echo  $b = max($newarr);

  list($newarr[$a], $newarr[$b]) = array($newarr[$b], $newarr[$a]);

  print_r($newarr);


          
      
        
?>