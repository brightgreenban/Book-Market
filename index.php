<?php
	include('components/header.php');
?>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<p class="text-left" id="who">by Alexander Babin</a>
					<h6>
						<?php
							include('modules/config.php');
						?>
					</h6>
				</div>
				<div class="col-lg-4">
					<h1>Book Catalog</h1>
				</div>
				<div class="col-lg-4">
					<div class="admin">
						<p class="text-right"><a id="admin__item" href="admin/admin.php">Admin Sigh In</a></p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- FORMS -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 form-padding">
					<form action='' method='post'>
						<h6>Search by genre:</h6>
						<select name='select' class="select-genre">
							<option value='all' selected>Unsorted</option>
							<option value='romance'>Romance</option>
							<option value='fantasy'>Fantasy</option>
							<option value='science'>Science</option>
							<option value='horror'>Horror</option>
							<option value='technology'>Technology</option>
						</select>
						<input type='submit' name='submit' value='Search' class="btn-defoult">
					</form>
				</div>
				<div class="col-lg-3 form-padding">
					<form action='' method='post'>
						<h6>Search by author:</h6>
						<input required type="text" name="author" class="text-input">
						<input type='submit' name='submit2' value='Search' class="btn-defoult">
					</form>
				</div>
				<div class="col-lg-3 form-padding">
					<form action='' method='post'>
						<h6>Display all:</h6>
						<input type='submit' name='submit3' value='Submit' class="btn-defoult">
					</form>	
				</div>
				<div class="col-lg-3">
				</div>
			</div>
		</div>
	</section>
	<!-- BY GENRE -->
	<section>
		<div class="container">
			<div class="row">
				<?php
				include('modules/searchGenre.php');
				?>
			</div>
		</div>
	</section>
	<!-- BY AUTHOR -->
	<section>
		<div class="container">
			<div class="row">
				<?php
				include('modules/searchAuthor.php');
				?>
			</div>
		</div>
	</section>
		<!-- SHOW ALL -->
	<section>
		<div class="container">
			<div class="row">
				<?php
				include_once('modules/showBooks.php');
				?>
			</div>
		</div>
	</section>

<?php
include('components/footer.php');
?>