<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        Upload the file: <input type="file" name="myFile">
        <input type="submit" value="Upload">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["myFile"]) && $_FILES["myFile"]["error"] == 0) {    //isset() function is used to check whether a variable is set or not.
            $fileName = $_FILES["myFile"]["name"];
            $fileSize = $_FILES["myFile"]["size"];
            $fileType = $_FILES["myFile"]["type"];
            echo "File name: " . $fileName . "<br>";
            echo "File size: " . $fileSize . " bytes" . "<br>";
            echo "File type: " . $fileType . "<br>";
            print_r($_FILES["myFile"]);
        }
    }
    ?>
</body>

</html>