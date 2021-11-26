<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "responsi";

   $connect = new mysqli("localhost","root","","responsi");
   
   $item_id = $_GET['item_id'];
   $sql = "SELECT * FROM inventory WHERE item_id='$item_id'";
   $execute = mysqli_query($connect, $sql);
   $row = mysqli_fetch_object($execute);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit</title>
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
<div class="container">
    <h2>Change Inventory Data <?= $item_id?> </h2>
</div>
<form action = "edit_process.php" method="POST" class="table table-borderless">
        <table>
            <tr>
                <td>Item code</td>
                <td><input type="text" name="item_id"></td>
            </tr>
            <tr>
                <td>Name of goods</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type="text" name="amount"></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td><input type="text" name="unit"></td>
            </tr>
            <tr>
                <td>Coming date</td>
                <td><input type="date" name="coming_date"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                <select name="category">
                    <option value="Building">Building</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Office Stationery">Office Inventory</option>
                    <option value="Electronic">Electronic</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <input type="radio" name="status" value="Well" checked/>Well
                <input type="radio" name="status" value="Maintenance" checked/>Maintenance
                <input type="radio" name="status" value="Damaged" checked/>Damaged         
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
        </table>
            <input type="submit" value="change">
    </form>
            <form action="main_page.php" class="close_button">
                <input type="submit" value="cancel">
            </form>
</body>
</html>