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
				<h4 class="card-header">Thêm chủ đề</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['TenChuDe']))
						{
							$TenChuDe = addslashes($_POST['TenChuDe']);
							
							if(trim($TenChuDe) == "")
								ThongBaoLoi("Tên chủ đề không được bỏ trống!");
							else
							{
								$sql = "INSERT INTO `tbl_chude`(`TenChuDe`) VALUES('$TenChuDe')";
								$kq = mysqli_query($link, $sql);
								if($kq)
									header("Location: chude.php");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
					?>
					<form method="post" action="chude_them.php">
						<div class="form-group">
							<label for="TenChuDe">Tên chủ đề</label>
							<input type="text" class="form-control" id="TenChuDe" name="TenChuDe" placeholder="" required />
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
					</form>
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