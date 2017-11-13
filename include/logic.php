<?php
session_start();
function GenerateNew(){
        $x = rand(0,50);
        $y = rand(0,50);
        
        $operation = rand(0,1);
  
        if ($operation == 0) {
           $_SESSION['answer'] = $x + $y;
           $_SESSION['mathQuestion'] = $x . " + " . $y;
        } else
        {
            $_SESSION['answer'] = $x - $y;
            $_SESSION['mathQuestion'] = $x . " - " . $y;
        }

}

 function Calculate($answer, &$userInput){

        if(is_numeric($userInput)){

           if(trim($userInput) == trim($answer))
                {
                   echo "<div class='text text-centered'><h3 class='text-success'>Correct!</p></div>";
                    $_SESSION['correct']++;
                    $_SESSION['attempt']++;
                   
           
                } 
               else
                {
                    echo "<div class='text text-centered'><h3 class='text-fail'>Incorrect!</p></div>";
                    $_SESSION['correct']--;
                    $_SESSION['attempt']++;
                   
            
                }
        } else {
            $_SESSION['correct']--;
            $_SESSION['attempt']++;
            echo "must be a number!";
        }
 }
       
?>