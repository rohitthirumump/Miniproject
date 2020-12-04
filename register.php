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
            $sql = "INSERT INTO owner values ('$id','$fname', '$lname', '$email', '$contact', '$age', '$gender', '$pswrd')";
        } else if ($ur == "Customer"){
            $sql = "INSERT INTO customer  values ('$id','$fname', '$lname', '$email', '$contact', '$age', '$gender', '$pswrd')";
        } else{
            echo "Data not read";
        } 

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