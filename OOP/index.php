<!-- CLASS  -->
<?php 

//step1: we create a class named User
    class User{
        //step3: properties and method
        //properties
        public $username;
        protected $email ;
        public $role = 'member';

        //method(i.e function)
        public function addFriend(){
            return "$this->email added a new friend";
        }
        //video4: using constructor
        public function __construct($username,$email){
            $this->username = $username; 
            $this->email = $email;
        }

        //getter
        public function getemail(){
            return $this->email;
        }

        //setter (see video 6)
        public function setemail($email){
            //validate by checking if mail contain @ char.
            if(strpos($email, '@') > -1){
                $this->email = $email;
            }
        }

        public function message(){
            return "$this->email is sending a message";
        }
        //DESTRUCT AND CLONE MAGIC METHOD video10 

        public function __destruct(){
            echo "the user $this->email was removed <br />";
        }

        public function __clone(){
            $this->username = "this is a clone of " . $this->username;
        }

    }
    //INHERITANCE CLASS
    class AdminUser extends User{
        public $level;
        public $role = 'admin';


        public function __construct($username, $email, $level){
            $this->level = $level;
            parent:: __construct($username, $email);
        }      

        public function message(){
            return "$this->email, admin user, is sending a message";
        }

    }

//step2: we create a new object which instantiate the class above
$userone = new User("ryu", "ryu@gmail.com");
$usertwo = new User("Festus", "festus@gmail.com");
$userthree = new AdminUser("yoshi", "yoshi@gmail.com", 5);

// unset($userone);

$userFour = clone $userone;
echo $userFour->username;



// //update the users details
// $usertwo-> username;
// $usertwo-> email;

// echo $userone->username . ' = ' . $userone->email . '<br />';
// echo $userone-> addFriend() . '<br />';

// echo  $usertwo-> username . ' = ' . $usertwo->email . ' <br />';

// echo $usertwo-> addFriend() . '<br />';


// echo $userone->setemail('changedmail@gmail.com');
// echo $userone->getemail();

// echo $userthree-> username . ' = ' . $userthree->getemail() . ' (level - '. 5 . ')';
// echo $userthree->message(); 




//to identify what class the instantiation belongs to; 
// echo get_class($userone)

// //to identify all properties(or value) and method that belong to a class we use
// print_r(get_class_vars('User')) ; //properties or value
// echo '</br>';
// print_r(get_class_methods('User')); //method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title> 
</head>
<body>
    
</body>
</html>