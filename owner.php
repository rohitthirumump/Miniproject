<!DOCTYPE html>
<html>
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
		<!-- <link rel="stylesheet" href="css and js/home.css"> -->
		<link rel="stylesheet" href="css and js/gallery.css">
	</head>
	<body>
		<?php include ("config.php"); ?>
		<header>
			<nav id="header-nav" class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<div class="navbar-brand">
						<ul>
							<!-- <li><a href="home.html"></li> -->
							<!-- <li><h3>Home</h3></li> -->
							<!-- <li></a></li> -->
							<li><a href = "owner.php"></li>
							<li><h3>Gallary</h3></li>
							<li></a></li>
							<li><a href = "Contact.html"></li>
							<li><h3>Contact</h3></li>
							<li></a></li>
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
		<div class="bg"></div>

		<div class="container mt-4">
			<div class="row">
				<div class="col-9">
					<h1 class="text-white">Your houses...</h1>
				</div>

				<div class="col-3">
					<button class="btn btn-primary btn-sm login">
						<i class="fas fa-plus" aria-hidden="true" style="margin-left: 2vw;"></i>
						<a href="add.html" class="text-white">Add a new house</a>
					</button>
				</div>
				
			</div>

			<!-- All houses from db -->
			<?php
				$projects = array();
				// fetch data from the database
                // $records = '';
                $id = $_SESSION['id'];
                // echo $id;
                $records = mysqli_query($conn,"select * from house_details where Owner_id= $id ") 
                        or die("Query fail: " . mysqli_error());
				// $contacts = mysqli_query($conn,"select Contact from owner") or die ("Query fail: ".mysqli_error());
			?>
			<div class="row ">
				<?php 
					while (  $project =  mysqli_fetch_assoc($records)    )
					{
						// $contact = mysqli_fetch_assoc($contacts)
				?>
                        <div class="col-lg-4 col-md-6">
                                <div class="card" >
										<img src="<?php echo $project['img'];?>" alt="" class="card-img-top image-responsive" >
										
                                        <div class="card-body text-center">
											<h3 class="card-title">House id: 
												<?php echo $project['House_id'];

													if ($project['status'] == 1){
														echo "(Available)";
													} else {
														echo "(Unavailable)";
													}
												?> 
											</h3>
											<p class="card-text">
												Locality: <?php echo $project['Locality'];?>
												<br>
												Type: <?php echo $project['Type'];?>
												<br>

												<!-- Contact Owner: <?php echo $project['Contact'];?> -->
												<br>
												<button class="btn btn-danger mt-2">
														<a href="" class="text-white">Delete</a> 
                                                </button>
                                                <button class="btn btn-warning mt-2">
														<a href="" class="text-white">Update</a> 
												</button>
											</p> 
                                        </div>
                                </div>
                        </div>
					<?php  } ?>

        </div>
		</div>





		<!-- js -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
	</body>
</html>