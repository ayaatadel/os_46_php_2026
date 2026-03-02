<?php

// var_dump($_POST);

// store data ---> data base 
require "connection.php";


if (isset($_POST["btn-register"])) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
  

    //  encrypting password 
    /**
     * hash 
     * md5
     */

    // secure data   
    ///                name pattern
    $namePattern = "/^[a-zA-Z]{3,}$/";
    if (!preg_match($namePattern, $userName)) {
        header("location:register.php?message=enter vaild name must be more than 3 characters");
    }
    ///            password pattern
    $passwordPattern = "/^[0-9]{6,15}$/";
    if (!preg_match($passwordPattern, $userPassword)) {
        header("location:register.php?passwordmessage=enter vaild password must be more than 6 numbers and less than 15 ");
    }
    // $encreptedPassword=md5($userPassword);
    $encreptedPassword = password_hash($userPassword, PASSWORD_DEFAULT);


    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?passwordmessage=enter vaild Email");
    }

    // check unique email or not

    $query = "select email from users where email='$userEmail'";
    $data = $connection->query($query);
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    if ($result)  // []
    {

        header("location:register.php?passwordmessage=this email already exist");
        exit;
    }


    // insert into database
    try {
        //code...
        $query = "insert into users (name,email,password) values(:name,:email,:password)";
        // $connection->query($query);
        //
        $sqlQuery=$connection->prepare($query);
        $sqlQuery->execute(
            [
                ':name'=>$userName ,
                ':email'=>$userEmail,
                ':password'=>$encreptedPassword,
            ]
        );
    } catch (PDOException $e) {

        echo $e->getMessage();
        // echo "Email Already exist";
        //throw $th;
    }
    // insert into users () values ('','','')
}



/////////////////// Login ==========
if (isset($_POST["btn-login"])) {

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
  
    //
    // $encreptedPassword=md5($userPassword);
    // $query="select * from users where 'email=$Email' and password ='$encreptedPassword'";
    // decrept password 
    // $decreptedPassword=password_verify($userPassword,"eccryptedpasssword");

    // 123456 || $hsh%8a8sa9
    $query = "select * from users where email=:email"; // single row  ===========> password
    // Users Email == Email 
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->execute([
        ':email'=>$userEmail
    ]);
    // var_dump($run);
    $user = $sqlQuery->fetch(PDO::FETCH_ASSOC);

    // array(4) { ["id"]=> int(5) ["name"]=> string(5) "ayaat" ["email"]=> string(15) "ayaat@gmail.com" ["password"]=> string(60) "$2y$10$kCsZoi1kmZMLqV0MdQ0Q7.1VdYN..ZskljHI493Gv2/exbIgxsa4m" }

    // var_dump($user &&  password_verify($userPassword, $user["password"]));
    if ($user &&  password_verify($userPassword, $user["password"])){
        // session
        // cookie
        // session_start();
        $_SESSION['login_ID']=$user['id'];
        // setcookie("login_id",$user['id'],time()+1*60*60,'./profile.php');
        header("location:profile.php?message=login success");
        exit;
    } else {
        header("location:login.php?message=check your email or password");
        exit;
    }


    // var_dump($user);



}
