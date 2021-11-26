<?php
    session_start();

    $connect = new mysqli("localhost","root","","responsi");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($connect,"SELECT * FROM staff WHERE username='$username' and password='$password'") or die(mysqli_error($connect));
    $checek = mysqli_num_rows($data);
    if($checek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:main_page.php");
    }
    else{
        header("location:login_page.php?message=failed");
    }
?>