<?PHP
include_once "libs.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form action="index.php" method="POST">
	<label for="userName"><p>Введите своё имя</p></label>
	<input type="text" name="userName" id="userName">
	<label for="userMessage"><p>Оставьте своё сообщение</p></label>
	<textarea name="userMessage" id="userMessage" placeholder="...здесь..." cols=20 rows=5></textarea>
	<input type="submit" name="submit" value="submit">
</form>
<?PHP
echo "<pre>";
$messages=getMessages();
$messages=addMessage($messages);
showMessage($messages);
?>
</body>
</html>