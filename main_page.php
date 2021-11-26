<?php
        session_start();

        if(empty($_SESSION['username'])) {
            header("location:login_page.php");
        }

        $username = $_SESSION['username'];
        $connect = new mysqli("localhost","root","","responsi");
        $staff_data_query = mysqli_query($connect, "SELECT * FROM staff WHERE username='$username'");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123200141</title>

    <style>
        *{
            font-family:'Times New Roman', Times, serif;
        }
        .container{
            background-color:darkslateblue;
            border-radius: 0px;
            padding: 10px 10px 10px 10px;
            text-align: center;
            color:white;
        }
        .account{
            padding-top: 50px;
            text-align: center;
        }
        .main_button {
            background-color:lightsteelblue;
            color: black;
            border:transparent;
            cursor: pointer;
            padding: 10px 10px 10px 10px;
            font-size: 18px;
        }
        a{
            text-decoration: none;
            color:inherit;
        }
        .main_button:hover {
            background-color:none;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-child {
            display: none;
            background-color:darkslateblue;
            min-width: 200px;
        }
        .dropdown-child a {
            color: white;
            padding: 20px;
            text-decoration: none;
            display: block;
        }
        .dropdown:hover .dropdown-child {
            display: block;
        }
        .logout_button{
            padding: 10px;
            border: none; 
            border-radius: 5px;
            font-size: 18px;
            float: right;
            background-color: darkslateblue;
        }
        .footer{
            width:99%;
            height:50px;
            line-height: 20px;
            background-color:darkslateblue;
            color:white;
            position:absolute;
            bottom:0px;
        }

    </style>
</head>
<body>  
    <div class=container>
        <h1> LIST OF INVENTORY </h1>
        <h1> EVERYTHING OFFICE </h1>
    </div>
    <div>
        <div class="main_button">
            <a href="main_page.php"> Home&ensp; </a>
            <a href="all_inventory.php"> Inventory List </a>
            <div class="dropdown">
                <button class="main_button">List Per Category</button>
                <div class="dropdown-child">
                    <a href="category.php">Building</a>
                    <a href="category.php">Vehicle</a>
                    <a href="category.php">Office Inventory</a>
                    <a href="category.php">Electronic</a>
                </div>    
        </div>
        <form action="logout.php" class="logout_button">
            <input type="submit" value="Logout">
        </form>
    </div>
        <div class="account">
            <h1> Welcome </h1>
            <h1> <div class="username"> <?php echo $_SESSION['username'] ?> 
            </div> </h1>
        </div>
    <div class="footer">
        <p align="center"> Inventory Web 2021 </p>
    </div>
</body>
</html>
