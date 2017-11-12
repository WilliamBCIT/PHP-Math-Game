<?php 
session_start();
global $answer;
$answer = $_SESSION['answer'];       
include('include/logic.php');
include('include/header.php');

for($i = 0; $i <= 1; $i++){
    GenerateNew();
}
?>


   <div class="container">
        <h1>Vlad and William's Math Game!</h1>
        <form action = "logout.php" method="post">       
        <button type="submit">Logout</button>
       </form>
            
       <h3>What is the answer to 
           <?php
               echo $_SESSION['mathQuestion'] . "<br>";
           ?>
       </h3>

       
       <form method="POST">
       <label>Answer:</label>
       <input type="text" name="field" required>
       <button type="submit" onclick="Calculate()">Submit</button>
       </form>
       
       <br />
       
       <?php
       if(isset($_POST['field'])){
        Calculate($answer, $_POST['field']);
       }
       
       echo "<p>Score: ".$_SESSION['correct']." / ".$_SESSION['attempt']."</p>";
       include('include/footer.php');
      
       ?>
       
