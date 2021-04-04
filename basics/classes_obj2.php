<?php 
// creating a class
class User {
    private $email ; //defining the private variables
    private $name ; 
    // creating the default values for above variables using constructor
    public function __construct($email,$name){
        $this->email=$email;
        $this->name=$name;
    }
    // defining the public function 
    public function login(){
        echo $this->name, " Has Logged In";
    }
    //getting the name using getter
    public function getName(){
        return $this->name;
    }
    //setting a name using the setter 
    public function setName($name){
        if(is_string($name) && strlen($name) >1){
            $this->name=$name;
            return "Name Has Been Updated To $name";
        }
        else{
            return "Not Valid Name!";
        }
    }

}


$User2 = new User('omkar@calictus.com','Roger',);
echo "From Object 2 -> ",$User2->getName();
echo "</br>";
echo "From Object 2 -> ".$User2->setName('Joe');
?>