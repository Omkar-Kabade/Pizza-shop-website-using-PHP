<?php 
// creating a class
class User {
    public $email ; //defining the public variables
    public $name ; 
    // creating the default values for above variables using constructor
    public function __construct($email,$name){
        // $this->email="me@shimoga.com";
        // $this->name="traceback";
        $this->email=$email;
        $this->name=$name;
    }
    // defining the public function 
    public function login(){
        echo $this->name, " Has Logged In";
    }
}

// $User1= new User(); // now this obj will have all properties of User Class

// //using the User Class Properties
// echo "From Object-> ",$User1->login();
// echo" ->" ,$User1->name;
$User2 = new User('omkar@calictus.com','Roger',);
echo "From Object 2 ->",$User2->name;
echo "<br/> Object 2 ",$User2->login();
?>