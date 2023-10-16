<?php
//1. create a user validator class to handle validation
//2. constructor which takes in POST data from FORM
//3. check required "fields to check" are present in the data
//4. create methods to validate individual fields 
//5. --a method to validate a username
//6. --a method to validate an email
//7. return an error array once all checks are done

class UserValidator{
    private $data;
    private $errors = [];
    private static $fields = ['username', 'email', 'password1', 'password2']; 

    public function __construct($post_data){ 
        //the $post_data behind the scene is the $_POST from the index.php and can be called anything
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("'$field' is not present in the data");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword1();
        $this->validatePassword2();
        return $this->errors;
    }

    private function validateUsername(){
        //trim to avoid anywhite space
        $val = trim($this->data['username']);
        $pattern = '/^[a-zA-Z0-9]{6,12}$/';

        //chaeck if the field is empty
        if(empty($val)){
            $this->addError('username','username cannot be empty');
        } else{
            //use regular expression to validate the value($val)
            if(!preg_match($pattern, $val)){
                $this->addError('username', 'username must be 6-12 chars & alpha-numeric');
            }
        }

    }

    private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email','email cannot be empty');
        } else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'email must  be a valid');
            }
        }

    }

    private function validatePassword1(){
        $val = trim($this->data['password1']);
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/';

        if(empty($val)){
            $this->addError('password1','password field cannot be empty');
        } else{
            if(!preg_match($pattern, $val)){
                $this->addError("password1", "
                <ul> 
                    <li>At least 8 characters long.</li>
                    <li>Contains at least one uppercase letter.</li>
                    <li>Contains at least one lowercase letter.</li>
                    <li>Contains at least one digit.</li>
                    <li>Contains at least one special character (e.g., !@#$%^&*)</li>
                </ul>
                ");
            }
        }

    }

    private function validatePassword2(){
        $val = trim($this->data['password2']);

        if($this->data['password1'] !== $this->data['password2']){
            $this->addError('password2','The two password did not match');
        }
    }


    private function addError($key, $val){
        $this->errors[$key] = $val;
        
    }
}

?>