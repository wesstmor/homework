<!DOCTYPE html>
<html>
    <head></head>
    
    <body>
 

<form action = 'task24.php' method = 'POST'>

    <b>Введите числа:</b></br>

        "Число" <input type="text" name=0  size="15"></br>
</br>
    
    "Искомое число" <input type="text" name=1  size="6" value></br>
</br>
    <input type="submit" value="Submit!"></br>
</br>  
</form>

<?php               
      

          $a = $_POST[0];
          $b = $_POST[1];

        if($a==true && $b==true){
          
        echo "Результат: " . $res = substr_count ( $a, $b );
          
        }else{
            
            echo "Введите данные!";
        }
      
          
      
        
?>



    </body> 
</html>