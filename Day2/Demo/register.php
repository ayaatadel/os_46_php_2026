<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // var_dump($_GET);
    if(isset($_GET['message']))
        {
            echo "<p style=' background-color:green; color:white'>".$_GET['message']."</p>";
        }

        if(isset($_GET['error_message']))
        {
            echo "<p style=' background-color:red; color:white'>".$_GET['error_message']."</p>";
        }
    ?>
    <!-- http://localhost/Day2/Demo/server.php?name=&email=ayaat%40gmail.com&password=ayaat&register=register -->
<form action="server.php" method="post">
    <label for="name">Name:</label>
    <input placeholder="user_name" type="text" name="name" id="name">
    <input placeholder="user_email" type="email" name="email" id="email">
    <input placeholder="user_password" type="password" name="password" id="password">
    <input type="submit" value="register" name="register">

</form>

<hr><hr>
<form action="server.php" method="POST">
    <label for="name">Name:</label>
    <input placeholder="user_email" type="email" name="email" id="email">
    <input placeholder="user_password" type="password" name="password" id="password">
    <input type="submit" value="login" name="login">

</form>
</body>
</html>