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

        $rid = $_POST["rid"];
        $date = $_POST["date"];
        $dpay = $_POST["dpay"];
        $rent = $_POST["rent"];
        $oid = $_POST["oid"];
        $hid = $_POST["hid"];

        $cid = $_POST["cid"];
        $password = $_POST["password"];

        $cid_sql = "select * from customer where Password = '$password' and cust_id = '$cid' ";
        $result = mysqli_query($conn, $cid_sql);

        if(mysqli_num_rows($result) > 0) { 
            $sql = "INSERT INTO reg_details values ('$rid','$date', '$dpay', '$rent', '$oid', '$hid')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

         } else { ?>
            <script> alert("You are not a registered Customer"); 
                setTimeout(function () {
                window.location.href= 'http://localhost/Miniproject/signup.html'; // the redirect goes here
                },3000);
            </script>     
        <?php 
            // header("Location: http://localhost/Miniproject/signup.html");
        }
        
    ?>

</body>
</html>