<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";
 
    $connect = new mysqli("localhost","root","","responsi");

    $code = $_GET["code"];
    $name = $_GET["name"];
    $amount = $_GET["amount"];
    $unit = $_GET["unit"];
    $coming_date = $_GET["coming_date"];
    $category = $_GET["category"];
    $status = $_GET["status"];
    $price = $_GET["price"];

    $sql = "INSERT INTO inventory VALUE('$code','$name','$amount','$unit','$coming_date','$category','$status','$price')";

    if($connect->query($sql)){
        print "Data success to add";
        header("location:main_page.php");
    }else{
        print "Data failed to add";
        print $connect->error;
    }
?>