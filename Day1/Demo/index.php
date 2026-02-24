<?php 
// comment
# comment
/*

*/
// loosely , weekly typed language  (dynamic typing)  ===> variable can take any datatype and can change its datatype during execution

// include "navbar1.php"; // include file and continue execution even if file not found

require "navbar.php"; // include file and stop execution if file not found

// $track="open source";

// echo $track;     //====== string , muliple parameters
// echo "<br>";   
// print $track;    // return value 1  || string (single parameter)
// echo "<br>";
// print_r($track); // array or string || string (single parameter)
// echo "<br>"; 
// var_dump($track);  //  array  , muliple parameters
// echo "<br>";



// gettype() function   ======> return the datatype of variable
// echo gettype($track); //


/**
 * Data types in PHP
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Array
 * 6. Object
 * 7. NULL
 * 8. Resource
 */


// $age=26;
// $Is_Student=true;
// $students=["mahmoud","adel","mohammed"];
// $price=33.3;

// // echo gettype($age),"<br>",gettype($Is_Student),"<br>",gettype($students),"<br>",gettype($price); 
// // print gettype($age),"<br>",gettype($Is_Student),"<br>",gettype($students),"<br>",gettype($price); 

// print_r(gettype($age));
// echo "<br>"; 
// var_dump(gettype($age));
// echo "<br>"; 
// var_dump(gettype($age),gettype($Is_Student));


// $test=0;
// $test="";
// $test=null;
// // $test=10;
// echo $test;
// var_dump($test);


/*
truthy values: 1," ", true, any number except 0 ,undefined, any string except "0", any array except []
falthy values: 0, "", null, false, []


*/


// $n1="5";
// $n2=5;
// // echo $n1+$n2,"<br>";
// var_dump($n1==$n2); // 
// var_dump($n1===$n2); // 

// if("0")
//     {
//         echo "true";
//     }else{
//         echo "false";
//     }


// $n1=8;
// $n1="open source";
// $n1=8.8;
// echo $n1;
//====================== constant variables

// const PI=3.14;
// echo "<br>";
// $PI=3.15; 
// echo PI,"<br>";
// echo $PI;

// define("TrackName","open source");
// $TrackName="php";
// echo TrackName,"<br>";
// echo $TrackName,"<br>";



// =============== Casting =========
// $n1="5";  // string
// // echo gettype($n1),"<br>";
// // settype($n1,"integer");
// // echo gettype($n1);
// // var_dump($n1);


// // --------------
// $n2=(int)$n1;  // copy of $n1
// $n1=(int)$n1;  // casting n1 to integer and assign it to n1
// // echo gettype($n2),"<br>";
// echo gettype($n1),"<br>";




// ===================== 
// $age=26;
// $Is_Student=true;
// $students=["mahmoud","adel","mohammed"];
// $price=33.3;

// echo " <br> $age is integer <br>"; 
// var_dump(is_int($age));
// echo " <br> iti is string <br>"; 
// var_dump(is_string("iti"));

// echo " <br> is student is boolesn :<br>";
// var_dump(is_bool($Is_Student));
// echo "<br>";
// var_dump(is_double($price));
// echo "<br>";
// var_dump(is_array($students));
// echo " 5 is numeric <br>";
// var_dump(is_numeric("5d")); //============

// operators
// 1. Arithmetic operators  (+,-,*,/,%,**)
// 2. Assignment operators (=,+=,-=,*=,/=,%=,**=)
// 3. Comparison operators (==,===,!=,!==,<,>,<=,>=)
// 4. Increment/Decrement operators (++,--)
// 5. Logical operators (&&,||,!)

// $n1="3";
// $n2=3;
// 1. Arithmetic operators
// echo $n1+$n2,"<br>";  
// echo $n1-$n2,"<br>";
// echo $n1*$n2,"<br>";
// echo ((int)($n1/$n2)),"<br>"; // 3 || 3.3333333333333
// echo $n1%$n2,"<br>"; 
// //10 /3 =3 (3*3=9) 10-9=1; 
// echo $n1**$n2,"<br>"; // (10^3)
// echo pow($n1,$n2); // (10^3)

// 2. Assignment operators
// $n1+=$n2;  ... $n1=$n1+$n2;
// $n1-=$n2;  ... $n1=$n1-$n2;
// $n1*=$n2;  ... $n1=$n1*$n2;
// $n1/=$n2;  ... $n1=$n1/$n2;
// $n1%=$n2;  ... $n1=$n1%$n2;
// $n1**=$n2;  ... $n1=$n1**$n2;
//  ******************* comparison operators
// $n1="3";
// $n2=3;
// var_dump($n1==$n2);
// echo "<br>";
// var_dump($n1===$n2); //(n1== n2 && type(n1) == type(n2))
// echo "<br>";
// var_dump($n1!=$n2);
// echo "<br>";
// var_dump($n1!==$n2);
// echo "<br>";
// var_dump($n1>$n2);
// echo "<br>";
// var_dump($n1<$n2);
// echo "<br>";
// var_dump($n1<=$n2); // (n1< n2 || (n1== n2)))
// echo "<br>";
// var_dump($n1>=$n2);
// echo "<br>";

//  ******************* logical operators
// &&   ========> true : (all conditions are true)  || false : (any condition is false)
// || (OR) ========> true : (any condition is true)  || false : (all conditions are false)
// !  (NOT) =======> true : (condition is false) || false : (condition is true)

// different between && and AND

//================ conditional statements
// 1. if statement
//  2. if...else statement
// 3. if...elseif...else statement
// 4. switch statement
// 5. ternary operator

// $grade=100;
// if($grade>=90)
//     {
//         echo "Grade is A";
//     }else if($grade>=80){
//         echo "Grade is B";

//     }else {
//         echo "$n1 is zero";
//     }



//     switch ($grade) {
//         case 100:
//             echo "Grade is A+";
//             break;
//         case 90:
//             echo "Grade is A";
//             break;
//         case 80:
//             echo "Grade is B";
//             break;
//         default:
//             echo "Grade is C";
//             break;
//     }



// ternary operator 
// (condition)?true:false;
// $n1=5;
// ($n1%2==0)?print"Even number":print"Odd number";
// echo "<br>";
// ($n1>0)?print"Positive number":(($n1<0)?print"Negative number":print"Zero");
// echo "<br>";
// echo ($n1%2==0)?"Even number":"Odd number";



// increment and decrement operators
// $n1=5;
// echo $n1++;  // 5 6
// echo "<br>";
// echo $n1--; // 6 5
// echo "<br>";
// echo --$n1;  // 4 4
// echo "<br>";
// echo ++$n1; // 5 5

//=================loops
// 1. while loop
// 2. do...while loop
// 3. for loop
// 4. foreach loop

// $n1=0;
// while($n1<7)
//     {
//         echo $n1,"<br>";
//         $n1++;
//     }
//  echo "<br> ******************* <br>";
//     for($i=0;$i<7;$i++)
//     {
//         echo $i,"<br>";
//     }
//  echo "<br> ******************* <br>";
// $n1=0;
//     do{
//     echo $n1,"<br>";
//         $n1++;
//     }while($n1<7);


// Array  ===> can take more than datatype and more than value
//  (index ===> 0 , length ==> n.elements of array)
// indexed array , associative array , multidimensional array


// indexed array  =======> index  (key): value (value of index)
$arr = ["mahmoud", "adel", 1, true, 3.3, [`iti`, "open source"]];

// count ==> get length of array
// key : [0 , 1, 3]
// value : ["mahmoud","adel","mohammed"]
// echo $arr[0],"<br>";
// echo count($arr),"<br>";

// $arr2=Array("mahmoud","adel","mohammed");
// echo $arr2[1],"<br>";

// print_r($arr); // print array
// echo "<br>";

// $names = ["mahmoud", "adel", "mohammed"];
// // for($i=0;$i<count($arr);$i++)
// //     {
// //         // echo $arr[$i],"<br>";
// //         // is_array($arr[$i])?print_r($arr[$i]):print $arr[$i];
// //         if(is_array($arr[$i]))
// //             {
// //               print_r($arr[$i]);
// //               echo "<br>";
// //             }else{
// //                 print $arr[$i];
// //                 echo "<br>";
// //             }
// //     }

// // foreach ($arr as $index => $value) {
// //     // echo "index: $index , Value: $value <br>";
// //     // echo gettype($value),"<br>";

// //     if(is_array($value))
// //         {
// //           print_r($value); // arr[index]
// //           echo "<br>";
// //         }else{
// //             print $value;
// //             echo "<br>";
// //         }
// // }

// // $names = ["mahmoud", "adel", "mohammed"];
// // echo " <h1>Day1 PHP </h1> ";
// // echo "<table border='1'>";
// // echo "<thead>";
// // echo "<tr>";
// // echo "<th>Index</th>";
// // echo "<th>Name</th>";
// // echo "</tr>";
// // echo "</thead>";
// // echo "<tbody>";
// // foreach ($names as $index => $name) {
// //     echo "<tr> ";
// //     echo " <td>$index </td>";
// //     echo "<td> $name </td>";
// //     echo "</tr>";
// // }

// // echo "</tbody>";
// // echo "</table>";

// // $arr = ["mahmoud", "adel", 1, true, 3.3, ["iti", "open source"]];
// // echo " <h1>Day1 PHP </h1> ";
// // echo "<table border='1'>";
// // echo "<thead>";
// // echo "<tr>";
// // echo "<th>Index</th>";
// // echo "<th>Name</th>";
// // echo "</tr>";
// // echo "</thead>";
// // echo "<tbody>";
// // foreach ($arr as $index => $name) {

// //     if (is_array($name)) {
// //         foreach ($name as $subName => $value) {
// //             echo "<tr> ";
// //             $subName += $index;
// //             echo "<td>$subName </td>";
// //             echo "<td> $value </td>";
// //             echo "</tr>";
// //         }
// //     } else {
// //         echo "<tr> ";
// //         echo "<td>$index </td>";
// //         echo "<td> $name </td>";

// //         echo "</tr>";
// //     }
// // }
// // echo "</tbody>";
// // echo "</table>";



// //============ multidimensional array
// $arr = [
//     ["mahmoud", "adel", "mohammed"],
//     [1, 2, 3],
// ];


// for($i=0;$i<count($arr);$i++)
//     {
//         for($j=0;$j<count($arr[$i]);$j++)
//             {
//                 echo $arr[$i][$j],"<br>";
//             }
//     }
// $arr = [
//     ["mahmoud", "adel", "mohammed"],
//     [1, 2, 3],
// ];
//     foreach($arr as $index=>$value)
//         {
//             // print_r($value);
//             foreach($value as $index2=>$value2)
//                 {
//                     echo $value2,"<br> ";
                    
//                 }
//               echo ("<br> ******************* <br>");
//         }

// echo "<table border='1'>";
// echo "<thead>";
// echo "<tr>";
// echo "<th>Index</th>";
// echo "<th>Name</th>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// $r=0;
// foreach ($arr as $index => $name) {
//         foreach ($name as $subName => $value) {
//             echo "<tr> ";
            
//             echo "<td>$r </td>";
//             echo "<td> $value </td>";
//             echo "</tr>";
//             $r++;
//         }
//     } 
// echo "</tbody>";
// echo "</table>";



// ================== Associative array   (key => value)
// $student = [  
//     "name" => "mahmoud",
//     "age" => 26,
    
// ];

// foreach ($student as $key => $value) {
//     echo "Key: $key , Value: $value <br>";
// }

// echo "<table border='1'>";
// echo "<thead>";
// echo "<tr>";
// echo "<tr> ";
// foreach ($student as $key => $value) {
//     echo "<th> $key </th>";
//     }
//     echo "</tr>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// echo "<tr> ";
// foreach ($student as $key => $value) {
//     echo "<td> $value </td>";
//     }
//     echo "</tr>";

// echo "</tbody>";
// echo "</table>";




// $students= [  
// [
//     "name" => "mahmoud",
//     "age" => 26,
// ],
// [
//     "name" => "adel",
//     "age" => 25,
// ]
    
// ];


// foreach ($students as $key => $value) {
//   foreach ($value as $key2 => $value2) {
//     echo "Key: $key2 , Value: $value2 <br>";
//   }
// }


// echo "<table border='1'>";
// echo "<thead>";
// echo "<tr> ";
// echo "<th> name </th>";
// echo "<th> age </th>";
//     echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// foreach ($students as $key => $value) {
//     echo "<tr> ";
//     foreach ($value as $key2 => $value2) {      

//     echo "<td> $value2 </td>";
//     }
//     echo "</tr>";
//     }

// echo "</tbody>";
// echo "</table>";


// $arr=["mahmoud","adel",1,true,3.3,["iti","open source"]];
// var_dump(array_keys($arr));
// echo "<br>";

// $students= [  

//     "name" => "mahmoud",
//     "age" => 26,
// ];

// $persons= [  
// [
//     "name" => "mahmoud",
//     "age" => 26,
// ],
// [
//     "name" => "adel",
//     "age" => 25,
// ]
    
// ];

// var_dump(array_keys($students));
// echo "<br>";
// // var_dump(array_keys($persons[0]));
// echo "<br>";
// var_dump(array_values($students));



// concatination  (arraymerge, spread operator)
$arr1=["mahmoud","adel"];
$arr2=["mohammed","sara","aya"];
// $arr3=$arr1+$arr2;
// var_dump($arr3);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$arr3=array_merge($arr1,$arr2);
var_dump($arr3);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$array3=[...$arr1,...$arr2];
var_dump($arr3);


?>