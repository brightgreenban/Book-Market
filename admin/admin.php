<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">

				</div>
				<div class="col-lg-4">
					<h1>Book Catalog</h1>
				</div>
				<div class="col-lg-4">
		<p class="text-right"><a id="admin__item" href="../index.php">Back</a></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<h5>Admin Panel</h5>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</header>

<section>
	<div class="container ">
		<div class="row">
			<div class="center col-lg-4 form-padding">
				<form action='addBook.php' method='post'>
					<h6>
						<?php include('../modules/addBook.php');?>
					</h6>
						<h6>Add data:</h6>
						<p>Name of book: </p>
						<input required type="text" name='name' class="text-input">
						<p>Author: </p>
						<input required type="text" name="author" class="text-input">
						<p>Review: </p>
						<input required type="text" name="review" class="text-input">
						<p>Genre: </p>
						<input required type="text" name="genre" class="text-input">
						<p>Price: </p>
						<input required type="text" name="price" class="text-input"><br><br>
						<input type='submit' name='submit' value='Add' class="btn-defoult">
					</form>
			</div>
			<div class="center col-lg-4 form-padding">
				<form action='editBook.php' method=post>
					<h6>Edit data:</h6>
						<p>ID: </p>
						<input required type="text" name="id" class="text-input">
						<p>Name of book: </p>
						<input type="text" name="name" class="text-input">
						<p>Author: </p>
						<input type="text" name="author" class="text-input">
						<p>Review: </p>
						<input type="text" name="review" class="text-input">
						<p>Genre: </p>
						<input type="text" name="genre" class="text-input">
						<p>Price: </p>
						<input type="text" name="price" class="text-input"><br><br>
					<input type="submit" name="submit" value='Add' class="btn-defoult">  
					</form>
			</div>
			
            <div class="center col-lg-4 form-padding">
				<form action='deleteBook.php' method=post>
					  	<h6>Delete data:</h6>
						<p>ID: </p>
						<input required type="text" name="id" class="text-input"><br>
						<input type="submit" name="submit" value='DELETE' class="btn-defoult">  
				</form>
			</div>
			
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<?php
				include('../modules/config.php');
				include('viewFull.php');
			?>
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>