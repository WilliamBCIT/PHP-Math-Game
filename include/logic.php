<?php
 function Calculate(){
     global $attempt, $correct, $userInput;
       
           if(is_numeric($_POST['answer'])){
               $userInput = $_POST['answer'];
           }else{
               echo "Input must be a number!";
           }
       
       if($userInput = $_POST['answer']){
           echo "<div class='text text-centered'><p>Correct!</p></div>";
           $correct++;
           $attempt++;
           
       } else
           {
            echo "<div class='text text-centered'><p>Incorrect!</p></div>";
            $correct--;
           $attempt++;
           }
           
       }
       
?>