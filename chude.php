<?php
	require_once "config.php";
	include_once "functions.php";
	
	$sql = "SELECT * FROM `tbl_chude` WHERE 1";
	$danhsach = mysqli_query($link, $sql);
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
				<h4 class="card-header">Quản lý chủ đề</h4>
				<div class="card-body">
					<p><a class="btn btn-primary" href="chude_them.php" role="button">Thêm chủ đề</a></p>
					
					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="85%">Tên chủ đề</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($dong = mysqli_fetch_array($danhsach))
								{
									echo "<tr>";
										echo "<th>{$dong['ID']}</th>";
										echo "<td>{$dong['TenChuDe']}</td>";
										echo "<td class='text-center'><a href='chude_sua.php?id={$dong['ID']}'><img src='images/edit.png' /></a></td>";
										echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa chủ đề {$dong['TenChuDe']} không?\");' href='chude_xoa.php?id={$dong['ID']}'><img src='images/delete.png' /></a></td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
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