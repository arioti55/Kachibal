<?php
    require './controllers/userController.php';

    $user = new UserController;
    
    if(isset($_POST['submitted'])) {
        $user->store($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type = "text/css" href="css/signup.css">
    <title>Create User</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="signup-box">
    <h1>Sign-up</h1>
    <form action="" method="POST">
    <div class="textbox">
        <input type="text" placeholder ="fullName" name="fullName">
    </div>
    <div class="textbox">
        <input type="text" placeholder="email" name="email">
    </div>    
    <div class="textbox">
        <input type="password" placeholder = "password" name="password">
    </div>
    <div class ="checkbox">
        <input type="checkbox" name="is_admin?">Is Admin?
    </div>
        <button class="btn" name="submitted">Save</button>
    </form>
</div>

</body>
</html>
