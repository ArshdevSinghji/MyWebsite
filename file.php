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
    echo $_SERVER["SERVER_NAME"] . "<br>";

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "mydatabase";
    $conn = new mysqli($server_name, $user_name, $password, $db_name);

    if ($conn->connect_error) {
        die("<h1>Connection failed</h1>");
    } else {
        echo "<h1>Connection established</h1>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["myFile"]) && $_FILES["myFile"]["error"] == 0) {    //isset() function is used to check whether a variable is set or not.
            $fileName = $_FILES["myFile"]["name"];
            $fileSize = $_FILES["myFile"]["size"];
            $fileType = $_FILES["myFile"]["type"];
            $fileTemp = $_FILES["myFile"]["tmp_name"];
            echo "File name: " . $fileName . "<br>";
            echo "File size: " . $fileSize . " bytes" . "<br>";
            echo "File type: " . $fileType . "<br>";
            echo "File temp: " . $fileTemp . "<br>";

            // if (!is_dir("Btech-KN")) {
            //     mkdir("Btech-KN", 0775);
            // }
            // if (move_uploaded_file($fileTemp, "Btech-KN/" . $fileName)) {
            //     echo "File uploaded successfully" . "<br>";
            // } else {
            //     echo "Failed to upload file" . "<br>";
            // }
            // if ($fileSize > 100) { //bytes
            //     echo "File size should be less than 100 bytes" . "<br>";
            // }
            // $allowedFile = ["jpeg", "jpg", "png"];
            // $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            // echo $fileExt . "<br>";
            // if (in_array($fileExt, $allowedFile)) {
            //     echo "File is allowed" . "<br>";
            // } else {
            //     echo "File is not allwoed" . "<br>";
            // }

            $fileData = file_get_contents($fileTemp); //read contents of a file as a string

            $stmt = $conn->prepare("INSERT INTO kn_table (file_name,file_type,file_size,file_data) VALUES(?,?,?,?)");
            //prepares an sql statement for execution
            $stmt->bind_param("ssis", $fileName, $fileType, $fileSize, $fileData);
            if ($stmt->execute()) {
                echo "file uploaded successfully";
            }
        }
    }
    ?>
</body>

</html>