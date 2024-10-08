<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SCRIPT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container,
        .output-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 15px;
            max-width: 400px;
            width: 100%;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            width: 100%;
        }

        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output-container {
            margin-top: 20px;
            text-align: left;
        }

        .output-container h2 {
            font-size: 20px;
            color: #333;
        }

        .output-container p {
            background: #f1f1f1;
            border-left: 4px solid #007bff;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <label for="title">Title: </label>
            <input type="text" name="title" placeholder="Title" required>
            <label for="content">Content: </label>
            <input type="text" name="content" placeholder="Content" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div class="output-container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $arr = array($title, $content);
            foreach ($arr as $value) {
                echo $value . "<br>";
            }
        }
        ?>
    </div>
</body>

</html>