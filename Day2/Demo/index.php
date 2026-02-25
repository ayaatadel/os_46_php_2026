<?php 
// functions ============ > parametarized function , Non parametarized function
// == return function , not return function


// function printData()   // signature of the function
// {
//     echo  "Hello World";
// }

// // printData();



// function test()   // signature of the function
// {
//     return  "Hello World";
// }
// function sum(int $n1=0,int $n2=0) :int  // signature of the function
// {
//     // return  "test";
//     return  $n1+$n2;
// }

// echo sum(6,4);


// ========> Anonymous function (closure function)

// $name="open source";

// $result=function() use ($name)
// {
//     echo "Hello World $name ";
// };

// $result();
// echo "<br> ********************************** <br>";

// $value=fn($name)=>"hello world $name";

// echo $value($name);



//     Array functions 


// $arr=[1,2,3,4,5];

// array_pop($arr);  // removes the last element from the array and returns it
// var_dump($arr);
// echo "<br> ********************************** <br>";
// array_push($arr,[6,7,8]); 
// var_dump($arr); // adds one or more elements to the end of an array and returns the new number of elements in the array
// echo "<br> ********************************** <br>";
// // array_shift()

// array_shift($arr);  // removes the first element from the array and returns it
// var_dump($arr);
// echo "<br> ********************************** <br>";
// // array_unshift()

// array_unshift($arr,["iti","open source"]);

// echo "<br> ********************************** <br>";

// var_dump($arr);
// echo "<br> ********************************** <br>";

// $arr=["iti","open source","php"];
// echo implode("  **  ",$arr);   // make array to string  (important function)
// echo "<br> ********************************** <br>";

// $text="iti-open source-php";
// $arr=explode("-",$text);
// var_dump($arr);  // make string to array (important function)



// string functions 

// (
//   strlen :
//   trim : 
//   strtoupper : 
//   strtolower: 
//   str_replace: 
//   str_word_count: 
//   str_contains() ==> str_pos : 
//   str_starts_with : 
//   str_ends_with : 
//   substr : 
//   explode : 
//   implode : 
//   .  || " ": String Concatenation

//   )


$text ="world hello world";
// echo $text;
// echo "<br> ********************************** <br>";
// echo strlen($text);  // return the length of the string
// echo "<br> ********************************** <br>";
// echo strtoupper($text);
// echo "<br> ********************************** <br>";
// echo strtolower($text);
// echo "<br> ********************************** <br>";
// echo trim($text);  // remove whitespace from the beginning and end of a string
// echo "<br> ********************************** <br>";
// echo str_word_count($text);
// echo "<br> ********************************** <br>";
// echo strrev($text);  // reverse a string
// echo "<br> ********************************** <br>";
// echo str_replace("world","open source",$text);
// echo "<br> ********************************** <br>";
// echo $text;
// echo "<br> ********************************** <br>";
// str_contains($text,"hello")?print"exist":print "not exist";
// echo "<br> ********************************** <br>";
// echo strpos($text,"hello");
// echo "<br> ********************************** <br>";
// echo $text;
// var_dump(str_starts_with($text,"world"));
// echo "<br> ********************************** <br>";
// echo $text;
// echo "<br> ********************************** <br>";
// var_dump(str_ends_with($text,"world"));

// echo "<br> ********************************** <br>";
// echo "<br> ********************************** <br>";
// echo "<br> ********************************** <br>";
// echo "<br> ********************************** <br>";
// echo $text, "<br>";
// // world hello world"
// echo substr($text,-5,-3);


/// variable variables
// $x="text";
// $$x="hello";
// // $text="hello";
// // س=5
// // ص=10
// // سص=؟
// // 5 10 =50
// echo $text;

// ===================
// block scope 
// global scope

//============
// $x="text";
// function sayHello(&$x)
// {
//     // global $x;
//     $x="hello world";
//     // echo $x;
// }
// sayHello($x);
// echo $x;

// call by value : copy of the variable is passed to the function
// call by reference : reference of the variable is passed to the function

// $n=1;
// function add (&$n)
// {
//     $n++;
//     echo $n , "in funtion <br>";

// }

// add($n);
// echo $n ,"out of funtion <br>";


// /*
// by value ===> copy  but not change original variable
// by refrence ==> change the original variable

// */

// $text="hello world";
// $test="iti";
// $result="hello world"." "."iti";
// echo $result;
// echo "<br> ********************************** <br>";
// $result="$text $test";
// echo $result;



// =================== super global variable
// $_FILES : used to access the files uploaded through a form
// $_GET : used to access the data sent through the URL
// $_POST : used to access the data sent through a form
// $_REQUEST : used to access the data sent through both GET and POST methods
// $_SESSION : used to access the session variables
// $_COOKIE : used to access the cookies
// $_SERVER: used to access the server and execution environment information
// $_ENV : used to access the environment variables
?>