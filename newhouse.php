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

        $hid = $_POST["hid"];
        $locality = $_POST["locality"];
        $type = $_POST["type"];
        $status = $_POST["status"];
        $oid = $_POST["oid"];
        $img = $_POST["img"];

        $sql = "INSERT INTO house_details values ('$hid','$locality', '$type', '$status', '$oid', '$img')";

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