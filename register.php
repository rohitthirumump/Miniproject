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

        $id = $_POST["pid"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $contact = $_POST["contact"];
        $pswrd = $_POST["password"];

        $gender = $_POST["inlineRadioOptions"];
        $ur = $_POST["youare"];

        // echo "$id $fname $lname $email $age $contact $pswrd $gender $ur";
        if($ur == "Owner"){
            $s = "select * from owner where owner_id='$id'";
            $result = mysqli_query($conn,$s);
            $n = mysqli_num_rows($result);
            if($n == 1){
                echo " User ID already taken ";
            } else {
                $sql = "INSERT INTO owner values ('$id','$fname', '$lname', '$email', '$contact', '$age', '$gender', '$pswrd')";
            }
        } else if ($ur == "Customer"){
            $s = "select * from customer where cust_id='$id'";
            $result = mysqli_query($conn,$s);
            $n = mysqli_num_rows($result);
            if($n == 1){
                echo " User ID already taken ";
            } else {
            $sql = "INSERT INTO customer  values ('$id','$fname', '$lname', '$email', '$contact', '$age', '$gender', '$pswrd')";
        } 

        if (mysqli_query($conn, $sql)) {
            echo "Registration successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         
    ?>
</body>
</html>