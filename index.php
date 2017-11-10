<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>Math Game - Play</title>
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
        <h1>Vlad and William's Math Game!</h1>
       
       <h3>What is the answer to 
       
       <?php
        $x = rand(0,50);
        $y = rand(0,50);
        $operation = rand(0,1);
    
       
       echo $x;
       if ($operation == 0) {
           echo " + ";
       }
        if ($operation == 1) {
           echo " - ";
       }
       echo $y;

       ?>

       </h3>

</div>
</body>
</html>