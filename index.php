<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 
    <?php
    include "header.php";
    require "footer.php";
    echo "<h1>yoyoyoyo</h1>";
    include "header.php";
    require "footer.php";
    //difference between include and require is that if the file is not found then require will stop the execution of the code and include will not stop the execution of the code
    ?> 
    -->

    <form action="" method="post">
       <select name="select">
              <option value="about">about</option>
              <option value="contact">contact</option>
              <option value="footer">footer</option>
              <option value="header">header</option>
        </select>
        <input type="submit" value="submit">
    </form>

    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $choice=$_POST['select'];
        // $allowed=array("header","footer");
        if(file_exists($choice.".php")){
            include $choice.".php";
        }else{
            echo "404 not found";
        }
     }
    ?>
    
</body>
</html>