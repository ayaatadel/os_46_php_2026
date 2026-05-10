<?php 

require_once "./header.php";

//  commets in php
#
/* 
 fdlf
 dfmd
 commets
*/
$track="software fundamentals";
echo $track . "<br>";
print($track . "<br>");
var_dump($track . "<br>");
print_r($track . "<br>");

echo "<br> *************************************** <br>";

$age=20;
echo $age . "<br>";
echo gettype($age) , "<br>";

$price=2.3;
echo $price . "<br>";
echo gettype($price) , "<br>";

$isAdmin=true;
echo $isAdmin . "<br>";

$students=["mahmoud","mohammed"];
print_r($students);
echo "<br>";
echo gettype($students) , "<br>";
var_dump($students);
echo "<br>";
echo gettype($students) , "<br>";

echo "<br> ****************************************** <br>";

$test=null;
// echo $test , "<br>";
echo gettype($test) , "<br>";

is_null($test) ? print("null") : print("not null") ;
echo "<br>";
echo (is_null($test) ? ("null") : ("not null")) ;

echo "<br> ****************************************** <br>";

// ========> Anonymous function (closure function)

// $result=function() 
// {
//     echo "Hello World  ";
// };

$name="open source";
$year=2026;

$result=function() use ($name , $year)
{
    echo "Hello World $name $year ";
};


$result();
echo "<br> ********************************** <br>";

$value=fn($name)=>"hello world $name";

echo $value($name);

echo "<br> ********************************** <br>";

$x="text";
function sayHello()
{
    $x="inner function";
    // global $x;
    echo $x;
    }
    
    sayHello();
    echo "<br> ***************  arrow function  ******************* <br>";
    
    
    $arrow_fun=fn ()=> "hello arrow function";
    echo $arrow_fun();
    
    echo "<br> ********************************** <br>";
    
    $sum = fn($a, $b) => $a + $b;
    echo $sum(2, 3);
    echo "<br> ***************  self invoked function  ******************* <br>";
    
    (function () {
        echo "Hello Self Invoked Function";
        })();
        
     echo "<br> ***************  call by value & call by refrence ******************* <br>";
    $n=1;
    function add (&$n)
    {
        $n++;
        echo $n , "in funtion <br>";

    }

    add($n);
    echo $n ,"out of funtion <br>";





?>