<html>

<head>
	<title>旅游网</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="veiwport" content="width=devide-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style>
		.gallery-box h4 {
			width: 200px;
			display: block;
			color: #fff;
			text-shadow: -2px 2px 2px #000;
			font-weight: 600;
			font-size: 20px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-20%, -50%);
		}
	</style>

</head>

<body>
	<section class="header">
		<div class="container">
			<img src="images/logo.png">
		</div>

		<h1>和我们一起旅游</h1>
		<p>这会一次快乐的旅游</p>
		<form action="" method="GET">
			<div class="input-group">
				<input name="search" type="text" class="form-control" placeholder="搜索">
				<div class="input-group-append">
					<button type="submit" class="input-group-text btn">搜索</button>
				</div>
			</div>
		</form>
	</section>
	<section class="features py-4">
		<div class="title font-weight-bold text-center h1 my-3">目的地</div>
		<div class="container">
			<div class="row">
				<?php
				include 'model/connection.php';
				//check for search terms
				if (isset($_GET['search'])) {

					$search_term = $_GET['search'];
					if ($search_term == '') {
						$sql = "SELECT * FROM packages";
					} else {
						$sql = "SELECT * FROM packages WHERE name LIKE '%$search_term%' OR location LIKE '%$search_term%'";
					}
				} else {
					$sql = "SELECT * FROM packages";
				}
				$result = $conn->query($sql);
				while ($row = mysqli_fetch_assoc($result)) {
					$smallstr = substr($row['desc'], 0, 120);
					echo '
						<div class="col-12 col-md-4 mt-2">
						<div class="feature-box">
							<div class="feature-img" style="background: url(images/' . $row['image'] . ')">
								<div class="price">
									<p> ' . $row['price'] . '元</p>
								</div>

							</div>
							<div class="feature-details">
								<a href="./package.php?id=' . $row['id'] . '">
									<h4>' . $row['name'] . '</h4>
								</a>
								<p> 
								' . $smallstr . ' 
								</p>
								<div>
									<span><i class="fa fa-map-marker"></i> ' . $row['location'] . '</span>
									<span><i class="fa fa-sun-o"></i> ' . $row['days'] . ' 天</span>
									<span><i class="fa fa-moon-o"></i> ' . $row['nights'] . ' 夜</span>
								</div>
							</div>
						</div>
					</div>
				
					';
				}
				?>
			</div>
		</div>
	</section>
	<section class="gallery">
		<h1>旅行相册</h1>
		<div class="container">
			<div class="row">

				<?php
				include 'model/connection.php';
				$sql = "SELECT * FROM gallery";
				$result = $conn->query($sql);
				while ($row = mysqli_fetch_assoc($result)) {
					//image
					$sql2 = "SELECT * FROM photos WHERE gallery_id='" . $row['id'] . "'  LIMIT 1";
					$result2 = $conn->query($sql2);
					$photo = mysqli_fetch_assoc($result2);

					echo '
					<div class="col-md-3">
						<div class="gallery-box"  data-toggle="modal" data-target="#galleryModal-' . $row['id'] . '"> 
							<a href="#">
							<img src="./images/gallery/' . $photo['image'] . '" style="height:200px;">
								<h4>' . $row['name'] . '</h4>
							</a>
						</div>
					</div> 
				
					';
					$image_lists = '';
					$sql3 = "SELECT * FROM photos WHERE gallery_id='" . $row['id'] . "' ";
					$result3 = $conn->query($sql3);
					while ($row2 = mysqli_fetch_assoc($result3)) {
						$image_lists = $image_lists . '<img src="./images/gallery/' . $row2['image'] . '"  class="img-fluid mt-2" style="height:200px;">';
					}

					echo '
					<div class="modal fade" id="galleryModal-' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">' . $row['name'] . '</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
									' . $image_lists . '
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button> 
						</div>
						</div>
					</div>
					</div>
					';
				}
				?>

			</div>
		</div>
	</section>
	<!-- <section class="banner">
		<div class="banner-highlights">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2>Get 30% off on top destination</h2>
						<p>Book your package before 28th Feburary and get 30% flat discount.</p>
					</div>
					<div class="col-md-4">
						 
						<button onclick="location.href='Booking.php'" type="button" class="book-btn">Book Now</button>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section class="footer py-3">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3">
					<img src="images/logo.png" class="footer-logo img-fluid">
					<p class="pt-1 text-justify">这是一个可以提供优质旅游景点的网站.</p>
				</div>
				<div class="col-md-3">
					<h5 class="text-capitalize font-weight-bold">联系我们</h5>
					<div>
						<i class="fa fa-phone-square"></i>0512-1234567
					</div>
					<div>
						<i class="fa fa-envelope"></i>tour@tour.com
					</div>
					<div>
						<i class="fa fa-home"></i>苏州，吴江
					</div>
				</div>
				<div class="col-md-3">
					<h5 class="text-capitalize font-weight-bold">关注我们</h5>
					<div>
						<i class="fa fa-weibo"></i>旅游网
					</div>
					<div>
						<i class="fa fa-wechat"></i>旅游网
					</div>
				</div>
				<div>
					<button data-toggle="modal" data-target="#queriemodal" type="button" class="book-btn">留言</button>
					<div class="modal fade" id="queriemodal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content bg-dark">
								<div class="modal-header">
									<h5 class="modal-title">留言</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="./model/addquerie.php" method="POST">
										<div class="form-group">
											<label>姓名</label>
											<input name="name" type="text" class="form-control" placeholder="姓名" required>
										</div>
										<div class="form-group">
											<label>联系电话</label>
											<input name="phone" type="text" class="form-control" placeholder="联系电话" required>
										</div>
										<div class="form-group">
											<label>邮箱</label>
											<input name="email" type="email" class="form-control" placeholder="邮箱" required>
										</div>
										<div class="form-group">
											<label>留言 </label>
											<textarea name="querie" class="form-control"></textarea>
										</div>
										<button type="submit" class="btn btn-danger ">发送</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
								</div>
							</div>
						</div>
					</div>

					<button data-toggle="modal" data-target="#vehiclerentalModal" type="button" class="book-btn">租用汽车</button>
					
					<div class="modal fade" id="vehiclerentalModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content bg-dark">
								<div class="modal-header">
									<h5 class="modal-title">租用汽车</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="./model/vehiclerental.php" method="POST">
										<div class="form-group">
											<label>姓名</label>
											<input name="name" type="text" class="form-control" placeholder="输入姓名" required>
										</div>
										<div class="form-group">
											<label>联系电话</label>
											<input name="phone" type="text" class="form-control" placeholder="联系电话" required>
										</div>
										<div class="form-group">
											<label>地址</label>
											<input name="address" type="text" class="form-control" placeholder="输入地址" required>
										</div>
										<div class="form-group">
											<label>邮箱</label>
											<input name="email" type="email" class="form-control" placeholder="输入邮箱" required>
										</div>
										<div class="form-group">
											<label>开始预定日期</label>
											<input name="reservation_from" type="date" class="form-control" required>
										</div>
										<div class="form-group">
											<label>结束预定日期</label>
											<input name="reservation_to" type="date" class="form-control" required>
										</div>
										<div class="form-group">
											<label>备注 (可选)</label>
											<textarea name="note" class="form-control"></textarea>
										</div>
										<button type="submit" class="btn btn-danger ">预定</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<hr class="mt-3">
			
		</div>
		<div class="container text-center">
			<a href="dashboard/login.php"><h5 class="font-weight-light">管理员登录 <br></h5></a>
			<h5 class="font-weight-light">&copy; 2020 徐展鹏 G18190230 <br></h5>
		</div>
	</section>


</body>

</html>