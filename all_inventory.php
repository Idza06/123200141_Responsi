<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";
 
    $connect = new mysqli("localhost","root","","responsi");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>All Inventory</title>
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
        <h2>Inventory List</h2>
    </div>
    <div>
        <form action="add_inventory.php" class="add_inventory">
            <input type="submit" value=" + Add">
        </form>
    </div>
    <?php
        $sql = "SELECT * FROM inventory";
        $invent = $connect->query($sql);
    ?>
    <table border="1" class="table">
            <th class="table-dark">No</th>
            <th class="table-dark">Code</th>
            <th class="table-dark">Name of Goods</th>
            <th class="table-dark">Amount</th>
            <th class="table-dark">Unit</th>
            <th class="table-dark">Coming Date</th>
            <th class="table-dark">Category</th>
            <th class="table-dark">Status</th>
            <th class="table-dark">Unit Price</th>
            <th class="table-dark">Total Price</th>
            <?php

                $data = mysqli_query($connect, "SELECT * FROM inventory");

                $total=0;
                $total_price=0;
                $no=1;

                while($row = $data->fetch_assoc()){
                    $total = $row['amount'] * $row['price'];
                    $total_price += $total;
                }    
            ?>
            <th class="table-dark">Action</th>
        <?php
        
            while($row = $invent->fetch_object()){
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row->item_id?></td>
            <td><?=$row->item_name?></td>
            <td><?=$row->amount?></td>
            <td><?=$row->unit?></td>
            <td><?=$row->arrival_date?></td>
            <td><?=$row->category?></td>
            <td><?=$row->item_status?></td>
            <td><?=$row->price?></td>
            <td><?=$total?></td>
            <td>
                <a href="edit.php?item_id=<?= $row->item_id?>">
                    <button> Edit </button>
                </a>
                <a href="delete.php?item_id=<?= $row->item_id?>">
                    <button> Delete </button>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <th colspan ="9">Total Inventory</th>
            <th><?=$total_price?></th>
        </tr>
    </table>
    <form action="main_page.php" class="back_button">
        <input type="submit" value="Back">
    </form>
</body>
</html>