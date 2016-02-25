<?PHP
class User {   
    protected $login;
    protected $password;
    protected $email;
    protected $rating=0;
    
    public function login(){
        echo "User is login";
    }
    
    public function logout(){
        echo "User is logout";
    }
    
    function isLogged(){
        if($user==$this->$login){
            echo "User is login";
        }else{
            echo "User is logout";
        }
    }
}

$driver1=new User;
$driver1->login="Mikhael";
$driver1->password="1234";
$driver1->email="mic@drv.com";


$driver2=new User;
$driver2->login="Bob";
$driver2->password="3434";
$driver2->email="Bo@drv.com";

$driver3=new User;
$driver3->login="Nick";
$driver3->password="3235";
$driver3->email="Nick@drv.com";



class Car{
    
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price; 
    
    function showBrand(){
        echo "Car brand is ".$this->brand;
    }
    function showModel(){
        echo "Car Model is ".$this->model;
    }
    
    public function __constructor{
        echo "new car created";
    }
}

$car1=new Car;
$car1->brand="Toyota";
$car1->model="Corolla";
$car1->year="2000";
$car1->driver=$driver1;

$car2=new Car;
$car2->brand="Mazda";
$car2->model="6";
$car2->year="2015";
$car2->driver=$driver2;

$car3=new Car;
$car3->brand="Ford";
$car3->model="Taurus";
$car3->year="1995";
$car3->driver=$driver3;

var_dump($car1);
echo "<br>";
echo "<br>";
var_dump($car2);
echo "<br>";
echo "<br>";
var_dump($car3);
echo "<br>";
echo "<br>";
print_r($car1);
echo "<br>";
echo "<br>";
print_r($car2);
echo "<br>";
echo "<br>";
print_r($car3);
echo "<br>";
echo "<br>";

$user1=new User;
$user1->login();
echo "<br>";
echo "<br>";
$user1->logout();
echo "<br>";
echo "<br>";

$driversInfo=array($driver1->login,$driver1->password,$driver1->email);
$drvobj=(object)$driversInfo;
var_dump($drvobj);
echo "<br>";


class WateCar extends Car{
    public $waterSpeed;
}

class Admin extends User{
    
}

$adm=new Admin;
$adm->login="root";
$adm->password="17gf39";
$adm->email="adm@gg.com";

class Manager extends User{
    
}

$mgr=new Manager;
$adm->login="mgrer";
$adm->password="sdfd9";
$adm->email="mgr@gg.com";






