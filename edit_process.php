<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";
 
    $connect = new mysqli("localhost","root","","responsi");

    $item_name = $_POST["item_name"];
    $amount = $_POST["amount"];
    $unit = $_POST["unit"];
    $arrival_date = $_POST["arrival_date"];
    $category = $_POST["category"];
    $item_status = $_POST["item_status"];
    $price = $_POST["price"];

    $sql = "UPDATE inventory SET item_name='$item_name', amount='$amount', unit='$unit', arrival_date='$arrival_date', category='$category', item_status='$item_status', price='$price' WHERE item_id='$item_id";
    $execute = mysqli_query($connect, $sql);

    if($connect->query($sql)){
        print "Data success to edit";
        header("location:main_page.php");
    }else{
        print "Data failed to edit";
        print $connect->error;
    }
?>