<?php
session_start();
    $item_id = $_SESSION['item_id'];
    $connect = new mysqli("localhost","root","","responsi");
    $query = mysqli_query($connect, "SELECT * FROM inventory where item_id='$item_id'");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <style>
        .container{
            width:100%;
            background-color:darkslateblue;
            border-radius: 0px;
            padding: 10px 10px 10px 10px;
            text-align: center;
            color:white;
        }
    </style>
</head>
<body>
<?php  
    $item_query = mysqli_query($connect, "SELECT * from inventory WHERE item_id='$item_id'");
?>
<div class="container">
    <h2>Clear Inventory Data</h2>
</div>
    <?php while($data = mysqli_fetch_array($item_query)) {
        $item_id = $data['item_id'];
        $_SESSION['item_id'] = $item_id;
    ?>    
        <a href="delete_process.php?item_id=<?php echo $data['item_id'];?>">Delete</a>

        <input type="submit" value="delete">
        <form action="main_page.php" class="close_button">
            <input type="submit" value="cancel">
        </form>
        <?php
            }
        ?>    

</body>
</html>