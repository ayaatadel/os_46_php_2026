<?php

require "navbar.php";
echo "<h1 class='test-success text-center mt-5'>connection With Database</h1>";

// create Database
// set Cradientionals
// ========================= PDO   ====> object

$dbType = "mysql";
$dbName = "iti_os_46_2026";
$host = "localhost"; // localhost:3307
$userName = "root";
$password = "";

try {
    $connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $password);
    session_start();
} catch (PDOException $e) {

    echo $e->getMessage();

}

// try {
//     //code...
//     //throw $th;
//     $connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $password);

//     // var_dump($connection);
//     // ************************  Deal with data base *************** 

//     // select data from users
//     $query = "select * from users";  // STRING

//     // var_dump($query);
//     $sqlQuery = $connection->prepare($query); // string ---> sql query

//     $sqlQuery->execute();      // TRUE , FALSE --------> exeecute

//     $data = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);     // more than value  ===> []
//     // $data=$sqlQuery->fetch(PDO::FETCH_ASSOC);    // ONE value
// } catch (PDOException $e) {

//     echo $e->getMessage();
// }
// var_dump($data);



//===================== Insert 


// try {

//     $connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $password);

//     $query ="insert into users (name,email,password) values('php','php@gmail.com','1234')";

//     $sqlQuery = $connection->prepare($query); // string ---> sql query

//     $sqlQuery->execute();      // TRUE , FALSE --------> exeecute

// } catch (PDOException $e) {

//     echo $e->getMessage();
// }
