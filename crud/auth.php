<?php
session_start();
session_destroy();
$error = false;


$userName = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$_SESSION['loggedin'] =  $_SESSION['loggedin'] ?? false;
$fp = fopen("data/user.txt","r");
if($userName && $password){
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    while($data = fgetcsv($fp)){
        if($data[0]==$userName && $data[1]==sha1($password)){
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $userName;
            header("location: index.php?value=true");
        }
    }
    if(!$_SESSION['loggedin']){
        $error = true;
    }
}

if(isset($_GET['logout'])){
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    session_destroy();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 50px;
        }
        .row{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .logout-btn{
            margin-top: 50px;
            width: 300px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
    <div class="row" >
            <div class="column column-60 column-offset-20">
                
                <?php if(false == $_SESSION['loggedin']){
                    echo "<h1> Hello, Please Login.</h1></br>";
                } ?>
            </div>
        </div>
                
        <?php if((false == $_SESSION['loggedin'])): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php if(true == $error){
                    echo "<blockquote>Incorrect User Name of Password!</blockquote>";
                } ?>
            <form method="post">
                    <fieldset>
                        <label for="username">User Name</label>
                        <input type="text" placeholder="Enter Your User Name" id="username" name="username" autocomplete="off">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter Your Password" id="password" name="password" autocomplete="off">
                        <button class="button-primary" type="submit" name="submit">Log In</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php endif; ?>
        <!-- <?php if((true == $_SESSION['loggedin'])){
            
        } ?> -->


    </div>

</body>

</html>