<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>Math Game - Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link href="css/MathGame.css" rel="stylesheet" media="screen">
   <style>
      div[class^="col-"] {
      height: 100px; text-align: center; border: 2px solid black;
   }
   </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Vlad and William's Math Game!</h1>
    </div>
    <br />
    <br />
    <form action = "../index.php" method="post">
    <div class="text-center">
        <label>Username:</label>
        <input type="text" name="user" required>
        <br />
        <label>Password:</label>
        <input type="password" name="password" required>
        <br />
        <button type="submit" 
        
                <?php 
                $_SESSION["useractive"] = "True";
                ?>
                
        >Login</button>
    </div>
    </form>
</body>
</html>