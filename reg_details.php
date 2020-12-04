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

        $rid = $_POST["rid"];
        $date = $_POST["date"];
        $dpay = $_POST["dpay"];
        $rent = $_POST["rent"];
        $oid = $_POST["oid"];
        $hid = $_POST["hid"];

        $sql = "INSERT INTO reg_details values ('$rid','$date', '$dpay', '$rent', '$oid', '$hid')";

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