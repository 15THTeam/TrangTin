<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#00bfff;">
	<a class="navbar-brand" href="index.php">
		<img src="images/inews.png" width="30" height="30" class="d-inline-block align-top" alt="" />
		iNews
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Trang chủ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Xem nhiều nhất</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Tin mới nhất</a></li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<?php
				if(!isset($_SESSION['ID']))
				{
			?>
					<li class="nav-item"><a class="nav-link" href="dangnhap.php">Đăng nhập</a></li>
					<li class="nav-item"><a class="nav-link" href="dangky.php">Đăng ký</a></li>
			<?php
				}
				else
				{
					if($_SESSION['QuyenHan'] == 1)
					{
			?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="chude.php">Quản lý chủ đề</a>
								<a class="dropdown-item" href="#">Quản lý bài viết</a>
								<a class="dropdown-item" href="#">Quản lý người dùng</a>
							</div>
						</li>
			<?php
					}
			?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['HoVaTen']; ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="chude.php">Đổi mật khẩu</a>
							<a class="dropdown-item" href="#">Quản lý hồ sơ</a>
							<a class="dropdown-item" href="#">Đăng bài viết</a>
							<a class="dropdown-item" href="#">Quản lý bài viết</a>
							<a class="dropdown-item" href="dangxuat.php">Đăng xuất</a>
						</div>
					</li>
			<?php
				}
			?>
		</ul>
	</div>
</nav>