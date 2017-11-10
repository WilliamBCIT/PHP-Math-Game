<?php 
session_start();
include('include/header.php');
include('include/logic.php');

       
        $attempt; 
        $correct;
        $answer;
        $userInput;



?>


   <div class="container">
        <h1>Vlad and William's Math Game!</h1>
        <form action = "include/logout.php" method="post">       
        <button type="submit">Logout</button>
       </form>
            
       <h3>What is the answer to 
       
       <?php
        $x = rand(0,50);
        $y = rand(0,50);
        $operation = rand(0,1);
        global $answer;
           
        
       echo $x;
       if ($operation == 0) {
           $answer = $x + $y;
           echo " + ";
       } else
        {
           echo " - ";
           $answer = $x - $y;
        }
       echo $y;
           

       ?>

       ?</h3>

       
       <form action = "index.php" method="POST">
       <label>Answer:</label>
       <input type="text" name="answer" required>
       <button type="submit" onclick="Calculate()">Submit</button>
       </form>
       
       <br />
       
       <?php
       
       Calculate();
       
       echo "<p>Score: ".$correct." / ".$attempt."</p>";
       include('include/footer.php');
      
       ?>
       
