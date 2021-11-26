<?php 
    session_start();
    $connect = new mysqli("localhost","root","","responsi");

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone_num = mysqli_real_escape_string($connect, $_POST['phone_num']);

    $_SESSION['errors'] = array();

    if(empty($username)) {
        array_push($_SESSION['errors'], "1");
    }
    if(empty($password)) {
        array_push($_SESSION['errors'], "2");
    }
    if(strlen($password) < 8) {
        array_push($_SESSION['errors'], "6");
    }
    if(empty($full_name)) {
        array_push($_SESSION['errors'], "3");
    }

    $username_check = mysqli_query($connect, "SELECT * FROM staff WHERE username='$username'");
    $user = mysqli_fetch_assoc($username_check);
    
    if($user) {
        if($user['username'] == $username) {
            array_push($_SESSION['errors'], "5");
        }
    }

    if(count($_SESSION['errors']) == 0) {
        $insert_query = "INSERT INTO staff VALUES ('$username','$password','$full_name','$email','$phone_num')";
        mysqli_query($connect, "$insert_query") or die(mysqli_error($connect));

        unset($_SESSION['errors']);

        header("location:login_page.php?message=register");
    }
    else {
        header("location:registration_page.php");
    }

?>