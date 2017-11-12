<?php 
session_start();

$user = $_POST['user'];
$pass = $_POST['password'];

$credentials = file_get_contents("include/credentials.config");
$credentials = str_replace("\r\n", ", ", $credentials);

//$logindata = explode("\r\n",$credentials);
$fielddata = explode(", ",$credentials);

$validuser = false;
$validpass = false;

for($i=0; $i< count($fielddata); $i++)
    {
        if ($fielddata[$i] == $user)
        {    
            $validuser = true;
            if ($fielddata[$i] == $pass)
            {
                $validpass = true;
            }
        }
    }

    if ($validuser != true || $validpass != true) {
        header("Location: include/login.php?errormsg=Invalid username or password.");
        die();
    }
       
        $attempt; 
        $correct;
        $answer;
        $userInput;

include('include/header.php');
include('include/logic.php');

print_r($fielddata);
    
?>


   <div class="container">
        <h1>Vlad and William's Math Game!</h1>
        <form action = "logout.php" method="post">       
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
       
