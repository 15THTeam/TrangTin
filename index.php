<?php
	require_once "config.php";
	include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>iNews</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/inews.png" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-custom.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>
			
			<div class="card">
				<h4 class="card-header">Trang chủ</h4>
				<div class="card-body">
					<p class="card-text">Trang tin điện tử.</p>
				</div>
			</div>
			
			<hr />
			<footer>Bản quyền &copy; <?php echo date("Y") ?> bởi DH15TH.</footer>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>