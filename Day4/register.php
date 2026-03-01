<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
   
   <?php 
   
   if(isset($_GET["message"]))
    {
        echo "<p>".$_GET["message"]."</p>";
    }
   ?>
    <form action="server.php" method="post" enctype="multipart/form-data" >

        <input type="text" name="name" id="" placeholder="Enter Your name">
        <br>
        <br>
        <input type="email" name="email" id="" placeholder="Enter Your email">
        <br>
        <br>
        <input type="password" name="password" id="" placeholder="Enter Your password">
        <br>
        <br>
        <label for="">User Profile</label>
        <input type="file" name="img" id="">
        <!-- <input type="file" name="cv" id=""> -->
        <button type="submit" name="btnRegister">Register</button>
    </form>
</body>
</html>