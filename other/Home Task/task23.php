<!DOCTYPE html>
<html>
    <head></head>
    
    <body>
 

<form action = 'task23.php' method = 'POST'>

    <b>Введите числа:</b></br>

    <input type="text" name="numb"  size="15">

    <input type="submit" value="Submit!"></br>
    
</form>

<?php               
        
      foreach($_POST as $val){
          
      echo "Результат: " . $newarr = array_sum(str_split($val));

      }

        
?>



    </body> 
</html>