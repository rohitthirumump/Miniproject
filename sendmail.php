<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       include("config.php");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $sug = $_POST["message"];

        $sql = "INSERT INTO feedback values ('$name','$email', '$sug')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         
    ?>

</body>
</html>