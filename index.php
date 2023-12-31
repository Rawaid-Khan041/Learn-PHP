<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // echo "<h1>Hellow</h1>";
    // echo "<h2>Rawaid" . " Khan</h2>";
    // echo 444;
    // $name = "Rawaid Khan";
    // echo "Hellow how are you:" . $name;
    
    // **Datatype** //
    /*String
   $x = "Rawaid khan";
  integer
  $x=12;
float
$x= 123.555;
doule
$x=true;
arry
$x= array("JS" , "HTML" , "CSS" , "java");
   echo $x[3] . "<br>";
Null
$x=null;
echo "$x";

pta chle ga us ke datatype ki kya type hai.
   var_dump($x);*/

   //** Constant Variable */
    //  define("test", 90);
    //  $sum= test + 78;
    //  echo $sum;

     ///*** Arithmetic Operators */

        //  $a = 12;
        //  $b = 55;
        //  $c= $a * $b;
        //   echo $c;  

        // ** Comparison Operator **//
        // ** ==  **//
        // $a = 80;
        // $b = 10;
        // echo $a == $b;

        //**  ===  */ us me type bh bta skte he ye dono varibale ki type same he ya nai
        // $a =27;
        // $c="27";
        
        //** != */
        // $b = 18;
        // $t = 19;
        // echo $b != $t;

        //** <> */ us ko bh hm note equal ke lea use kr skte hai.
        // $a =18;
        // $b= 19;
        // echo $a <> $b;

            //** !== */
            // $a = 10;
            // $b = "10";
            // echo $a !== $b;
        
            // greater than > //
            // $a =29;
            // $b =19;
            // echo $a > $b;

            //less than < //
            // $a =17;
            // $b =19;
            // echo $a < $b;

            //** >= */
        //     $a =19;
        //     $b =18;
        //     echo $a >= $b;

        //*** If  Statement */

        // $a =29;
        // $b =27;
        // if($a > $b){
        //    echo "A is Greater <br>";
        // }
        // echo "Here is other Statement";


        //** Logical Operator */
         //** && */
        //  $a =17;
        //  $b =10;
        //  if($a > $b && $a <= $b){
        //      echo " A is Greater";
        //  }

        //** || */
        // $a = 18;
        // $b =10;
        // if($a < $b || $a > $b){
    //       False   :   True
    //             True   
        //     echo "This condition is True";
        // }

        //** ! */
    //    $age =20;
    //    if(!($age <=18 )){
    //       echo "You are a eligiable";
    //    }

    //** xor */ us me agr dono True huge tu "False" Huga aur agr ak true huwa dosra false tu "True" answer aye ga:
    // $age =20;
    // if($age >18 xor $age >21){
    //    echo "You are a eligiable";
    // }

    //** if else statement */

    $name = "Rawaid Khan";
    $gender = "male";
    if($gender == "male" && $name == "Rawaid Kha"){
        echo "It is right";
    }else{
        echo "it is not right";
    }
         ?>
    
</body>
</html>