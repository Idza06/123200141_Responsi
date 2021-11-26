<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";
 
    $connect = new mysqli("localhost","root","","responsi");

    $item_id = $_GET["item_id"];

    $sql = "DELETE FROM inventory WHERE $item_id='$item_id'";
    $execute = mysqli_query($connect, $sql);

    if($connect->query($sql)){
        print "Data success to delete";
        header("location:main_page.php");
    }else{
        print "Data failed to delete";
        print $connect->error;
    }
?>