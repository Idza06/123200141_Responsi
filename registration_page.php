<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            min-height: 100vh;
            background-color:darkslateblue;
        }
        form{
            width: 400px;
            height: 350px;
            background-color: #f1f1f1;
            padding: 30px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .register_input h3{
            text-align: center;
            margin-bottom: 20px
        }
        input[type=text], input[type=password] {
            font-size: 15px;
            color: #333;
            width: 100%;
            border: none;
            background: none;
            padding: 0 5px;
            height: 40px;
        }
        .container {
            padding: 10px;
        }
        .close_button{
            display:contents;
            background-color:transparent;
            font-size: 20px;
            border:none;
            color:red;
            height:40px;
            margin-bottom: -40px;
            } 
        .register_button {
            display: block;
            width: 100%;
            height: 40px;
            color: #f1f1f1;
            background:forestgreen;
            outline: none;
            cursor: pointer;
            border: none;
            margin-top: 20px;
        }

    </style>
</head>
<body>
<?php
        session_start();
        if(empty($_SESSION['errors'])){
            $_SESSION['errors']=array();
        }
        $errors_list = $_SESSION['errors'];
    ?>
    
    <div class="container">
        <form action="login_page.php" class="close_button">
            <input type="submit" value="X">
        </form>
        <form action="registration_process.php" method="POST" class="register_input">
        <h3> Register to Web Based Inventory Application </h3>
            <div class="fname">
                <input type="text" name="fname" class="fname type_input" placeholder="First Name">
                <div class="err_msg">
                    <?php
                        if(in_array("3", $_SESSION['errors'])) {
                            echo "First name must be filled.<br>";
                        }
                    ?>
                </div>
            </div>
            <div class="lname">
                <input type="text" name="lname" class="lname type_input" placeholder="Last Name">
                <div class="err_msg">
                    <?php
                        if(in_array("4", $_SESSION['errors'])) {
                            echo "Last name must be filled.";
                        }
                    ?>
                </div>
            </div>
            <div class="username">
                <input type="text" name="username" class="username type_input" placeholder="Username">
                <div class="err_msg">
                    <?php
                        if(in_array("1", $_SESSION['errors'])) {
                            echo "Username must be filled.<br>";
                        }
                        else if(in_array("5", $_SESSION['errors'])) {
                            echo "Username is already taken.";
                        }
                    ?>
                </div>
            </div>
            <div class="password">
                <input type="password" name="password" class="password type_input" placeholder="Password"><br>
                <div class="password_desc">Password must be at least 8 characters</div>
                <div class="err_msg">
                    <?php
                        if(in_array("2", $_SESSION['errors'])) {
                            echo "Password must be filled.";
                        }
                        else if(in_array("6", $_SESSION['errors'])) {
                            echo "Password must be at least 8 characters!";
                        }
                    ?>
                </div>
            </div>
            <input type="submit" value="Create an Account" class="register_button">
        </form>
    </div>

</body>
</html>