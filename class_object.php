<?php 
    //classes

    class User{
        public $name;
        public $email;

        //constructor
       public function __construct($name, $email){
        // $this->email = 'fintechy@gmail.com';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
        
       }

        public function login(){
            echo $this->name . ' was logged in successfully <br />';
        }
    }
    //instantiating the class to create new obj
            //method-1
    // $userOne = new User();
    
    //call login function
    // $userOne-> login();
    // echo $userOne-> email;

        //method-2
    $userTwo = new User('techKing', 'techKing@gmail.com');
    echo $userTwo-> name . '<br />';
    echo $userTwo-> email . '<br />';

    $userTwo-> login();

    
?>