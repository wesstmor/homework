<!DOCTYPE html>
<html>
    <head></head>
    <body>
<form action="OOP_less_17.php" method="POST" >
Name<input type=text, value="name">
Email<input type=email, value="email">
Phone<input type=text value="name">
<input type=submit>
</form>



<?php

print_r($_POST);
        
class ContactForm{
    public $name;
    public $mail;
    public $phone;
}

$sentForm=new ContactForm($_POST);


?>
        </body>
</html>