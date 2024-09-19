<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="myfile" id="file">
        <input type="submit" value="Upload">
    </form>
    <?php
        // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     if(isset($FILES['file']))
        //     $file_name=$_FILES['myfile']['name'];
        //     $file_size=$_FILES['myfile']['size'];
        //     $file_type=$_FILES['myfile']['type'];
        //     $file_tmp=$_FILES['myfile']['tmp_name'];
        //     echo "File Name: $file_name<br>";
        //     echo "File Size: $file_size bytes<br>";
        //     echo "File Type: $file_type<br>";
        //     echo "Temporary File Location: $file_tmp<br>";
        // }
        if(null !== $_FILES['fileUpload'] && $_FILES['fileUpload']['error'] == 0){
        
            $uploadDir="uploads/";
        
            if(!is_dir('uploadDir')){
                mkdir('uploadDir',0755);
            }
        
            $targetFileTypes=$uploadDirectory.basename($fileName);
        
            $allowedFileTypes=array('jpg','jpeg','png','gif');
            $fileExtension=strtolower(pathinfo($targetFileTypes,PATHINFO_EXTENSION));
        
            if(in_array($fileExtension,$allowedFileTypes)){
                if($fileSize<5*1024*1024){
                    if(move_uploaded_file($fileTmp,$targetFileTypes)){
                        echo "File uploaded successfully.";
                    }else{
                        echo "Error uploading file.";
                    }
        
                }
            }
        }
    ?>
</body>

</html>