<?php 
    class Weather{
        public static $temp_condition = ['cold','mild','warm'];

        public static function celcius_to_farenheit($c){
            return $c * 9 / 5 + 32;
        }

        public static function detemine_temp_condition($f){
            if($f < 40){
                return 'cold';

            }else if($f < 70){
                return 'mild';

            } else{
                return 'warm';
            }
        }
    }

    // print_r(Weather:: $temp_condition);
    // echo Weather:: celcius_to_farenheit(20);
    echo Weather::detemine_temp_condition(500);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>