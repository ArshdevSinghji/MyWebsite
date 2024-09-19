<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- inventory managemnt system -->
     <h1>Inventory Managemnt System</h1>
    <div class="form-container">
        <form action="" method="post">
            <h1>Add new item</h1>
            <input type="text" name="name" placeholder="Enter Name">
            <input type="number" name="quantity" placeholder="Quantity">
            <input type="number" name="price" placeholder="Price">
            <input type="submit" value="add" name="action">
        </form>
        <form action="" method="post">
            <h1>Update item Quantity</h1>
            <input type="text" name="name" placeholder="Enter Name">
            <input type="number" name="quantity" placeholder="Quantity">
            <input type="submit" value="update" name='action'>
        </form>
        <form action="" method="post">
            <h1>Delete item</h1>
            <input type="text" name="name" placeholder="Enter Name">
            <input type="submit" value="delete" name='action'>
        </form>
        <form method="post">
            <h1>Calculate items</h1>
            <input type="submit" value="calculate" name='action'>
    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $action =$_POST["action"];
            switch($action){
                case 'add':
                    $name=$_POST['name'];
                    $quantity=$_POST['quantity'];
                    $price=$_POST['price'];
                    $inventory[$name]=array('quantity'=>$quantity,'price'=>$price);
                    echo "Item added successfully";
                    break;
                case 'update':
                    $name=$_POST['name'];
                    $quantity=$_POST['quantity'];
                    if(array_key_exists($name,$inventory)){
                        $inventory[$name]['quantity']+=$quantity;
                        echo "Item updated successfully";
                    }else{
                        echo "Item not found";
                    }
                    break;
                case 'delete':
                    $name=$_POST['name'];
                    if(array_key_exists($name,$inventory)){
                        unset($inventory[$name]);
                        echo "Item deleted successfully";
                    }else{
                        echo "Item not found";
                    }
                    break;
                case 'calculate':
                    $total=0;
                    foreach ($inventory as $name => $item) {
                        $total += $item['quantity'] * $item['price'];
                    }
                    echo "Total value of inventory: ".$total;
                    break;
                default:
                    echo "Invalid action";
                    break;
            }
        }
    ?>
</body>
</html>