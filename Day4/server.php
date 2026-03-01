<?php 


var_dump($_POST) ;
echo "<br> <br>";
// json ===> array of object ===> [ ] ==> object 

// file ====> string
// json ===> json object ====> associative array 
// string ----> json array ===> store data
// =================== 
var_dump($_FILES["img"]); // all information about file (image)
// var_dump($_FILES); // all information about file (image)

/***
 * store image ===> name of image + extension of this imamage
 */



//==================== Register
if(isset($_POST["btnRegister"]))
    {

     $name=$_POST["name"];
     $email=$_POST["email"];
     $password=$_POST["password"];
     $image=$_FILES["img"];

      if(!is_dir("images"))
        {
           mkdir("images");
        }


//  screeen1.png     
//  screeen2.png     
// 1234567.png   

// Screenshot 2026-02-22 104852.png 
//(data.txt)
// pathinfo("data.txt",PATHINFO_EXTENSION);

$newImage=time().'.'.pathinfo($image["name"],PATHINFO_EXTENSION);
// echo  "new image :  " , $newImage ,"<br>"; // 1772357573.png

// echo "<br>", "image type ",gettype($newImage);


     // if exist or not 


     // check size of imaage

     if($image["size"]>100000)
        {
            header("location:register.php?message=image must be less tham 1MB");
            exit;
        }


        // Validation Extension ===> specific 

        // echo "extension : ", pathinfo($image["name"],PATHINFO_EXTENSION) ,"<br>";
        $imageExtension=pathinfo($image["name"],PATHINFO_EXTENSION);

        // print.png ===> [print,png]
//  $imageExtension= strtolower(explode('.',$image["name"])[1]);
//  echo "<br> <br> ext :";
//  var_dump($imageExtension);
     
        // another way to get extension


        $valideExtensions=["jpeg","jpg"];

        if(!in_array($imageExtension,$valideExtensions))
        {
            header("location:register.php?message=shoose valid image (jpg,jpeg)");
            exit;
        }


       if(!file_exists("student.json"))
        {
            file_put_contents("student.json","[]");
        }
        else {


           move_uploaded_file($image["tmp_name"],"./images/".$newImage);

            $studentData= file_get_contents("student.json"); // string
            // echo "<br>", gettype($studentData),"<br>";   
            $decodedData=json_decode($studentData,true); // associative array
            // echo  gettype($decodedData), "<br>";   
            // echo "file exist you can store data";
            $user=[
                "name"=>$name,
                "email"=>$email,
                "password"=>$password,
                "image"=>$newImage
            ];
            // array_push($decodedData,$user);
           $decodedData[]=$user;  // array ---> string

           $newData=json_encode($decodedData); // store data in string
           file_put_contents("student.json",$newData);

           header("login.php");
           exit;

        }

    }

    // [ ]


//================================== login
if(isset($_POST["btnLogin"]))
    {

    }



?>