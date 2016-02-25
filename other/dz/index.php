<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <form action='index.html' method="POST">
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


   	 if(is_readable("massage.db")){
      $massage=file_get_contents("massage.db");
      $massage=unserialize($massage);
    }

      if(isset($_post['submit'])){
      print_r($_post);
      
      $newPost['userName']=$_POST['userName'];
      $newPost['userMassage']=$_POST['userMassage'];
      $massage[]=$newPost;
      $massageDB=serialize($massage);
      file_put_contents("massage.db",$massageDB);
         
    }

      if(isset($massege)){
      foreach($massage as $post){
      echo "<p>Посетитель {$post['userName']} пишет:</p>";
      echo "<p>{$post['userMassage']}</p>";

  }

}

      
    ?>
  
  </body>
</html>