<?php 
// require "navbar.php";
require "connection.php";
echo "<h1> User Profile </h1>";

if(isset($_SESSION['login_ID']))
    {
        // var_dump();
        $userId=$_SESSION['login_ID'];
        $query = "select * from users where id=:id"; // single row  ===========> password
    // Users Email == Email 
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->execute([
        ':id'=>$userId
    ]);
      $user = $sqlQuery->fetch(PDO::FETCH_ASSOC);
      var_dump($user);
    }else{
        header("location:login.php?message=you must login first");
    }


?>