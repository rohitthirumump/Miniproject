<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        // config
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "house_renting";
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 

        $name = $_POST["name"];
        $email = $_POST["email"];
        $sug = $_POST["message"];

        $sql = "INSERT INTO feedback values ('$name','$email', '$sug')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         mysqli_close($conn);   
    ?>

</body>
</html>