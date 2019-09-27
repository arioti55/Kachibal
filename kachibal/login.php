<?php
    require './controllers/AuthController.php';

    $user = new AuthController;
    

    if(isset($_POST['buttoned'])) {
        $user->login($_POST);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Authentification</title>
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="shortcut icon" type="image/x-icon" href="fitnessLogo2.png">
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <title>Tips4Gym | Home</title>
</head>

<body> 
<form action = "" method ="POST">
    
    <div class="login-box">
        <h1>Login</h1>
        
        
        <div class="textbox">
            <input type="text" placeholder="Email" name="email" >
        </div>
        <div class="textbox">
            <input type="password" placeholder="Password" name="password" >
        </div>
        
        <button class="btn" type="btn" type="button" name="buttoned" value="Sign in">Sign in
        
    </div>
</form>
</body>

</html>
