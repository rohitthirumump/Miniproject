<?php 
    include("config.php");

    $id = $_POST['id'];
    $sql = "select * from house_details where House_id = $id";
    $record = mysqli_query($conn,$sql) or die("Query fail: " . mysqli_error($conn));
    $result = mysqli_fetch_assoc($record);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>House Renting Website	</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- bootstrap -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
		<!-- custom css -->
        <link rel="stylesheet" href="css and js/home.css">
        <link rel="stylesheet" href="css and js/signup.css">
</head>
<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                    <ul>
                        <!-- <li><a href="index.html"></li> -->
                        <!-- <li><h3>Home</h3></li> -->
                        <!-- <li></a></li> -->
                        <li><a href = "owner.php"></li>
                        <li><h3>Gallary</h3></li>
                        <li></a></li>
                        <!-- <li><a href = "Contact.html"></li> -->
                        <!-- <li><h3>Contact</h3></li> -->
                        <!-- <li></a></li> -->
                    </div>
                </div>
                <div class="info">
                    <!-- <i class="fas fa-sign-in-alt" aria-hidden="true"></i> -->
                    <!-- <a href="login.html"><span style="margin-right: 2vw;">Sign In</span></a> -->
                    <!-- <i class="fas fa-plus" aria-hidden="true" style="margin-left: 2vw;"></i> -->
                    <a href="logout.php"><span>Logout</span></a>
                </div>
                <!-- <div class="search">
                    <input type="text" placeholder="Search Device">
                    <button style="background-color: green;">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <span>Search</span>
                    </button>
                </div> -->
            </div>
        </nav>
    </header>
    <div class="container ">
        <div class="box border bg-light mx-auto my-5 rounded">
            <div class="">
                <h1 class="text-center mb-4">Update House <?php echo $result['House_id'] ?></h1> 
                <form action="updatequery.php" method="POST">
                        <div class="form-group">
                        <input type="number" class="form-control"  name="id" placeholder="Re-enter house id">
                        </div>
                        <div class="form-group">
                            <label for="locality">Locality</label>
                            <input type="text" class="form-control" value=" <?php echo $result['Locality'] ?>" name="locality" id="locality" placeholder="" required>
                        </div>  
                        <div class="form-group">
                            <label for="type">House Type</label>
                            <select name="type" id="tyoe" class="" required>
                                <!-- <option selected="" value="Default">(Choose house type)</option> -->
                                <option value="STUDIO">STUDIO</option>
                                <option value="1BHK">1BHK</option>
                                <option value="2BHK">2BHK</option>
                                <option value="3BHK">3BHK</option>
                                <option value="RHOUSE">RAW HOUSE</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="status">House Status</label>
                            <select name="status" id="status" class="" required>
                                <!-- <option selected="" value="Default">(available or not)</option> -->
                                <option value="1">Available</option>
                                <option value="0">Unavailable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img">Image url</label>
                            <input type="text" class="form-control" name="img" id="img" value=" <?php echo $result['img'] ?>" placeholder="" required >
                        </div>
                        
                        <div class="form-group">
                            
                            <button class="form-control btn btn-primary" id="submit" name="Submit">Submit</button> 
                        </div>
                </form>
            </div>
        </div>
    </div>

    



    <!-- js -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
</body>
</html>