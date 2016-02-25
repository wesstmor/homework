<?PHP
error_reporting(E_ALL);
//$flag=true;
/*if ($flag){
function welcome(){
	echo "Welcome!<br>";
}
}*/
/*function foo(){
	echo "Работает функция ",__FUNCTION__,"<br>";
function welcome(){
	echo "Работает функция ",__FUNCTION__,"<br>";
	echo "Welcome!<br>";
}
}
foo();
welcome();
foo();*/
/*function welcome(&$name, $role=0){
	switch ($role){
		case 0:$type="Guest";$st="style='font-size:20px;color:blue;'";break;
		case 1:$type="User";$st="style='font-size:22px;color:green;'";break;
		case 2:$type="Moderator";$st="style='font-size:24px;color:red;'";break;
		default:$type="Unknown user";$st="style='font-size:16px;color:yellow;'";break;
	}
	echo "<p $st>Welcome $type $name !</p>";
	$name="New user";
	
	
}*/
/*function welcome($name, $role=0){
	switch ($role){
		case 0:$type="Guest";$st="style='font-size:20px;color:blue;'";break;
		case 1:$type="User";$st="style='font-size:22px;color:green;'";break;
		case 2:$type="Moderator";$st="style='font-size:24px;color:red;'";break;
		default:$type="Unknown user";$st="style='font-size:16px;color:yellow;'";break;
	}
	echo "<p $st>Welcome $type $name !</p>";
	global $name;
	$name="New user";
}*/
function welcome($name, $role=0){
	switch ($role){
		case 0:$type="Guest";$st="style='font-size:20px;color:blue;'";break;
		case 1:$type="User";$st="style='font-size:22px;color:green;'";break;
		case 2:$type="Moderator";$st="style='font-size:24px;color:red;'";break;
		default:$type="Unknown user";$st="style='font-size:16px;color:yellow;'";break;
	}
	echo "<p $st>Welcome $type $name !</p>";
	//global $name;
	
	$GLOBALS["name"]="New user";
}
//$n="Гость";
//$r="Гена";
//welcome($r,$n);
//welcome($r);
//welcome("Юра");
//welcome("Миша",1);
//welcome("Дима",2);
//welcome("Костя",115);
//$name="John";
//welcome($name,0);
//echo $name;
//echo "<pre>";
//print_r($GLOBALS);
/*function mySum($a,$b){
	return $a+$b;
	echo "Ничего";
}*/
function toArray($a,$b,$c){
	return [$a,$b,$c];
}
//print_r(toArray(1,2,3,4,5));
//$arr=toArray(1,2,3)[0];
//$arr[0];
//list($n1,$n2,$n3)=toArray(1,2,3);
//echo $arr;
function sumArray($arr){
	$sum=0;
	foreach ($arr as $v){
		$sum+=$v;
	}
	return $sum;
}
function myCount($arr){
	$i=0;
	foreach ($arr as $v){
		$i++;
		if (is_array($v)){
			$i+=myCount($v);
		}
	}
	return $i;
}
$arr=[1,1,2,
	[0,1,2,3,4],
	3,
	4,
	[0,5,
	[2,0,1,4,5],
	4,1],
	3,
	2,
	1];
//echo myCount($arr),"<br>";
//echo count($arr,1);
//5!=1*2*3*4*5;
function fact($n){
	if ($n==1) return 1;
	return $n*fact($n-1);
}
//echo fact(5);
/*echo sumArray($arr);
echo "<br>";
echo myCount($arr);*/
$newArr=[1,1,2,3,4,2,3,1];
echo "<pre>";
//print_r($newArr);
//echo "<br>";
function foo1(){
	global $newArr;
	foreach ($newArr as $k=>$v){
		$newArr[$k]+=1;
	}
}
//foo1();
//print_r($newArr);
function newSum(){
	$arr=func_get_args();
	$sum=0;
	foreach ($arr as $v){
		$sum+=$v;
	}
	return $sum;
}
//echo newSum(1,1,1,1,2,3,6,5,4,7,1);
/*последний элемент - 0\1 (отнимать\плюсовать)
предпоследний элемент - на сколько
последние два элемента не трогаем
возвращаем массив*/
function operate(...$nums){
	//$nums=func_get_args();
	$type=$nums[count($nums)-1];
	$val=$nums[count($nums)-2];
	if ($type) {
		foreach ($nums as $k=>$v){
			if ($k>=(count($nums)-2)) break;
			$nums["$k"]+=$val;
		}
	} else {
		foreach ($nums as $k=>$v){
			if ($k>=(count($nums)-2)) break;
			$nums["$k"]-=$val;
		}
	}
	return $nums;
}
//echo newSum(1,1,1,1,2,3,6,5,4,7,1);
print_r(operate(1,1,1,1,2,3,6,5,4,10,0));























