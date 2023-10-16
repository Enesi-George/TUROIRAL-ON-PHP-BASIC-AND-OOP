<?php 
// $variable1 = ['email', 'getmail'];
// $variable2= array('georgeenesi124@gmail.com', 'dgkslkjjld');

// echo $variable1.$variable2
// echo "George in the techy \"yeaaah!\"";
// echo strlen($variable1);
// echo strtoupper($variable1);
// echo strtolower($variable1);
// echo str_replace('e', 'g', $variable1)

//Integer
//order of operation (B I D M A S)
//  Bracket, Indices, Division, Multiplication, Addition and Subtraction)
// $ages = [3,2,4,5];
// $ages[]= 40;

// array_push($ages,233);

// print_r ($ages);


// $combine = array_merge($variable1, $variable2);
// print_r ($combine);

//Assiociative Array

// $ninja1 = ['color'=> 'orange', 'type'=>'fruit', 'location' => 'Nigeria'];

// // echo count($ninja1);
// // print_r($ninja1);
// $ninja2 = ['Books'=> 'read', 'Food' => 'read', 'type'=> 'fruit'];

// print_r (array_push($ninja1, $ninja2))

//Multidimentional Arr

// $blogs = [
//     ['title'=>'mario party', 'autor'=> 'mario', 'content'=>'descript', 'like'=>40],
//     ['title'=>'julius club', 'autor'=> 'julius', 'content'=>'lorem', 'like'=>50],
//     ['title'=>'myjob', 'autor'=> 'portfolio', 'content'=>'loeee', 'like'=>60]
// ];
// // print_r($blog[2][3])

// // echo $blog[0]['title'];
// $popped = array_pop($blogs);
// print_r($popped);

// LOOPS
// $ninjas = ['shaun','claire', 'jarde'];

// for( $i=0; $i < count($ninjas); $i++ ){

//     echo $ninjas[$i] . '<br />';

// }

// foreach($ninjas as $ninja){
//     echo $ninja . ' <br />';
// }

// $products = [
//     ['name'=> 'aryh star', 'price'=> 35],
//     ['name'=> 'apple', 'price'=> 20],
//     ['name'=> 'sugar cane', 'price'=> 10],
//     ['name'=> 'battery', 'price'=> 60],
//     ['name'=> 'cookies', 'price'=> 75],
// ];

// foreach($products as $product){
//     echo $product['name'] . ' - '. $product['price'];
//     echo '<br />';
// };
// $i = 0;
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }
// $price = 40;
// if($price < 10){
//     echo 'the condition is met';
// } elseif($price < 50){
//     echo 'elseif condition not met';
// } else{
//     echo 'condition not met';
// }
// foreach($products as $product){
//     if($product['price'] > 20 && $product['price'] > 35){
//         echo $product['name']. ' - '. $product['price'];
//         echo '<br />';

//     };
// }

// FUNCTIONS

// function sayhello(){
//     echo "im now a php developer";
// }
// sayhello()
// function format_product($product){
//     // echo "{$product['name']} will cost #{$product['price']} to buy <br /> ";
//     return "{$product['name']} will cost #{$product['price']} to buy <br /> ";
// }
// $formatted = format_product(['name'=>'fruits', 'price'=> 30]);

// echo $formatted;

require 'newIndex.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <h1>Products</h1>
<ul>
    <?php foreach($products as $product){ ?>
        <?php if($product['price'] > 10){ ?>
            <li> 
                <?php echo $product['name'].' - ' . $product['price']?>
            </li>

            <?php }?>

        <?php }?>
</ul> -->


</body>
</html>
