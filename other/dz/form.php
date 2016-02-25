<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <form action='form.php' method="POST">
      <table>
        <tr>
          <td>Введите свое имя<input tye='text' name="userName"></td>
        </tr>
        <tr>
          <td>Введите коментарий<textarea name="userMassage" cols=20 rows=5></textarea></td>
        </tr>
        <tr>
          <td><input type='submit'name='submit'></td>
        </tr>
        
      </table>    
    </form>
 <?php
	
	//echo "<pre>";
if (is_readable("massage.db")){
      $massage=file_get_contents('massage.db');
      $massage=unserialize($massage);
    }

      if (isset($_POST['submit'])){
      print_r($_POST);
      
      $newPost["userName"]=$_POST["userName"];
      $newPost["userMassage"]=$_POST["userMassage"];
      $massage[]=$newPost;
      $massageDB=serialize($massage);
      file_put_contents("massage.db",$massageDB);
         
      }

      if(isset($massege)){
      $massage=array_revers($message);
      foreach($massage as $post){
      $post['userName']=htmlscecialcharacters($post['userName']);
      $post['userMassage']=htmlscecialcharacters($post['userMassage']);
      echo "<p>Посетитель {$post['userName']} пишет:</p>";
      echo "<p>{$post['userMassage']}</p>";

  }

}

      
    ?>
  
  </body>
</html>