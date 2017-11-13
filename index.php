<?php 
    session_start();
    if(is_null($_SESSION['correct'])){
        $_SESSION['correct'] = 0;
    }
    if(is_null($_SESSION['attempt'])){
        $_SESSION['attempt'] = 0;
    }
    global $answer;
    $answer = $_SESSION['answer'];       

    $user = $_POST['user'];
    $pass = $_POST['password'];

    $credentials = file_get_contents("include/credentials.config");
    $credentials = str_replace("\r\n", ", ", $credentials);

    $fielddata = explode(", ",$credentials);

    $validuser = false;
    $validpass = false;

    for($i=0; $i< count($fielddata); $i++){
        
        if ($fielddata[$i] == $user) {
            $validuser = true;
            $i++;
            
            if ($fielddata[$i] == $pass) {
                $validpass = true;
                } else {
                    $i++;
                }
            }
        }

        if ($validuser != true || $validpass != true) {
            $_SESSION["ActiveUser"] = "invalid";
            header("Location: include/login.php?errormsg=Invalid username or password.");
            die();
        }

        if ($_SESSION["ActiveUser"] != "valid") {
            header("Location: include/login.php");
            die();
        }

        if ($validuser == true && $validpass == true) {
            $_SESSION["ActiveUser"] = "valid";
        }

    include('include/header.php');
    include('include/logic.php');

    for($i = 0; $i <= 1; $i++){
        GenerateNew();
    }
?>

<div class="container">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col col-lg-10 col-sm-10 col-xs-8 col-md-9 vertical-align">
                <div class="container">
                    <h1 class="header-text">Vlad and William's Math Game!</h1>
                </div>
            </div>
            <div class="col col-sm-1 col-xs-1 col-md-2 col-lg-1 vertical-align">
                <div class="container no-margin">
                    <form action = "logout.php" method="post">
                        <button class="btn btn-primary btn-md" type="submit">Logout</button>
                    </form>
                </div>
            </div>
       </div>
    </div>
</div>
<div class="container">
    <div class="jumbotron">
        <div class="container body-text">
            <div class="row">
                <div class="col text-center">
                    <h3>What is the answer to 
                    <?php
                        echo $_SESSION['mathQuestion'] . "<br>";
                    ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col text-center"> 
                    <form class="form-inline" method="POST">
                        <div class="form-group">
                            <label for="field">Answer:</label>
                            <input type="text" class="form-control" name="field" id="field" required>
                            <button type="submit" class="btn btn-success" onclick="Calculate()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <?php
                        if(isset($_POST['field'])){
                            Calculate($answer, $_POST['field']);
                        }
                        echo "<p>Score: ".$_SESSION['correct']." / ".$_SESSION['attempt']."</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>