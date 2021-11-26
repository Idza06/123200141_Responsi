<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";

    $connect = mysqli_connect($server, $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        body{
            min-height: 100vh;
            background-color:darkslateblue;
        }
        form{
            width: 400px;
            height: 310px;
            background-color: #f1f1f1;
            padding: 30px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .login h2{
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
            height: 40px
        }
        .container {
            padding: 10px;
        }
        .login_button {
            display: block;
            width: 100%;
            height: 40px;
            color: #f1f1f1;
            background:forestgreen;
            outline: none;
            cursor: pointer;
            border: none;
        }
        .sign_up_link{
            margin-top: 10px;
            text-align: center;
            font-size: 13px;
        }
        .message{
            margin-top: 120px;
            text-align: center;
            font-size: 16px;
            color:white;
        }

    </style>
</head>
<body>
<div class="container">
            <form method="POST" action="login_process.php" class="login">
                <h2>Web Based Inventory Application</h2>
                <input type="text" name="username" placeholder="Username" class="username type_input"> <br>
                <input type="password" name="password" placeholder="Password" class="password type_input"> <br><br>
                <input type="submit" value="login" class="login_button">
                    <div class="sign_up_link">
                        Don't have an account? <a href="registration_page.php" class="sign_up_button">Create One</a>
                    </div>
            </form>
</div>
    <div class="message">
        <?php
            if(isset($_GET['message'])) {
                if($_GET['message'] == "failed") {
                    echo "Login failed! wrong username or password.";
                }
                else if($_GET['message'] == "not_yet_login") {
                    echo "You have to login to access!";
                }
                else if($_GET['message'] == "logout") {
                    echo "Logout successful";
                }
                else if($_GET['message'] == "register_success") {
                    echo "Register successful";
                }
            }
        ?>
    </div>