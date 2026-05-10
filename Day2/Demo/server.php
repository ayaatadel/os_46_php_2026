<?php 

// echo "hello";
// exit;
// print_r($_GET);   //====> associative
// exit;
// echo $_GET["name"];
// echo $_GET["email"];
// echo $_GET["password"];
// echo "<br> ********************************** <br>";
// print_r($_POST);   //====> associative

// echo $_POST["name"], "<br>";
// echo $_POST["email"], "<br>";
// echo $_POST["password"], "<br>";

// print_r($_REQUEST);   //====> associative
// print_r($_SERVER["REQUEST_METHOD"]);
// isset() : used to check if a variable is set and is not null
// isempty() : used to check if a variable is empty
// 
// print_r($_POST);
if(isset($_POST["register"]))
    {
      $name=$_POST["name"];
      $email=$_POST["email"];
      $password=$_POST['password'];

    // //   echo "regster successfully";
     $data=[
        'name'=>$name,
        'email'=>$email,
        'password'=>$password
     ];
     

   if($_POST["name"]=="admin")
    {
         header("location:register.php?message=register successfully you can login");
     exit;

    }else{
    header("location:register.php?error_message=you must register");
    exit;
    }}

    // if(isset($_POST["login"]))
    //     {
    //      echo "login successfully";
    //     }else{
    //         echo "please check your data";
    //     }



    /**
     * break  ======>  exit block
     * coninue====> scap
     * exist ===> stop execution code
     */
?>