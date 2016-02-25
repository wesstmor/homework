<?PHP
function getMessages(){
	if (is_readable("messages.db")){
	$messages=file_get_contents("messages.db");
	$messages=unserialize($messages);
}
return $messages;
}
function addMessage($messages){
	if (isset($_POST["submit"])){
	//print_r($_POST);
	$newPost["userName"]=$_POST["userName"];
	$newPost["userMessage"]=$_POST["userMessage"];
	$messages[]=$newPost;
	$messagesDB=serialize($messages);
	file_put_contents("messages.db",$messagesDB);
}
return $messages;
}
function showMessage($messages){
	$cens=["bad","verybed","worst","bedword"];
if (isset($messages)){
	$messages=array_reverse($messages);
	foreach ($messages as $post){
		foreach ($cens as $item){
			$post['userName']=str_replace($item,"CENSORED",$post['userName']);
			$post['userMessage']=str_replace($item,"CENSORED",$post['userMessage']);
		}
		$post['userName']=htmlspecialchars($post['userName']);
		$post['userMessage']=htmlspecialchars($post['userMessage']); 
		echo "<p> Посетитель {$post['userName']} пишет:</p>";
		echo "<p>{$post['userMessage']}</p>";
		echo "<br>";
	}
}
}
?>




