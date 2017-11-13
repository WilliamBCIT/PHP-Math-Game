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
           <link href="/css/MathGame.css" rel="stylesheet" media="screen">
           <style>
              div[class^="col-"] {
              height: 100px; text-align: center; border: 2px solid black;
           }
           </style>
        </head>
        <body>
            <div class="container">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col col-lg-10 col-sm-10 col-xs-8 col-md-9 vertical-align">
                            <div class="container">
                                <h1 class="header-text">Vlad and William's Math Game!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="jumbotron">
                        <div class="container body-text">
                            <form class="form-horizontal text-center" action = "../index.php" method="post">
                                <div class="form-group">
                                    <label for="user">Username:</label>
                                    <input type="text" class="form-control" name="user" id="user" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <div class="errormessage">
                                        <?php 
                                            $errormsg = $_GET['errormsg'];
                                            echo $errormsg;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="container no-margin">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php include('footer.php');?>