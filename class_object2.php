<?php 
//PRIVATE VARIABLE, GETTER AND SETTER FUNCTION

class User{
    private $email;
    private $name;

    public function __construct($name, $email){
        $this->email =  $email;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . 'logged in';
    }
    //using getter and setter to get and set value in a private class
    public function getName(){
        return $this->name;
    }

    //let now update the private value using setter function
    public function setName($name){
        if (is_string($name) && strlen($name) > 1){
            $this->name=$name;
            return "name has been updated to $name";
        } else{
            return 'not a valid name';
        }

    }

}
$userTwo= new User('great', 'great@gmail.com');
// echo $userTwo->name;

// echo $userTwo-> getName();
echo $userTwo->setName('Gabriella');
echo $userTwo->getName();





?>