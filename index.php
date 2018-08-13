<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is my PHP site</title>
	<link rel="stylesheet" type="text/css" href="style/core.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<?php  include 'includes/header.php'; ?>

	<div class="container">
		<h3>Content</h3>
		<h4>
			<?php   
				if(isset($_GET['about'])) {
					include 'includes/about.php';
				}else if(isset($_GET['products'])) {
					include 'includes/products.php';
				}
				else if(isset($_GET['blog'])) {
					include 'includes/blog.php';
				}
				else if(isset($_GET['contact'])) {
					include 'includes/contact.php';
				}
				else if(isset($_GET[''])) {
					include 'includes/home.php';	
				}

			?>
		</h4>
	</div>
	<?php include 'includes/footer.php'; ?>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>