<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buy Book</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div>
						<?php include('modules/config.php');?>
					</div>
				</div>
				<div class="col-lg-4">
					<h1>Book Market</h1>
				</div>
				<div class="col-lg-4">
					<div class="admin">
						<p class="text-right">
							<a id="admin__item" href="../index.php">Back</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>
<section>
	<div class="container">
		<div class="row">
			
		</div>
	</div>
</section>
    <section>
		<div class="container">
			<div class="row">
				<?php include('modules/show_user.php');?>
				<div class="center col-lg-6 form-padding buy-form">
					<p>Buy this book</p>
					<form action="modules/send.php" method="post">
						<input required  type='hidden' name='id' value="<?=$row[0]?>">
						<p>Your name: </p>
						<input required name="name" type="text" class="text-input">             
						<p>Count: </p>
						<input required name="count" type="text" class="text-input">
						<p>Adress: </p>
						<input required name="adress" type="text" class="text-input">
						<p>E-mail: </p>
						<input required name="mail" type="text" class="text-input"> <br><br>
						<input type="submit" value="Submit" name="button" class="btn-defoult">
					</form>
				</div>
			</div>
		</div>
	</section>

<?php
	include('../components/footer.php');
?>