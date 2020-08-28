<html>

<head>
    <title>旅游网</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="veiwport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>

    <?php
    include 'model/connection.php';
    //check for id
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $sql = "SELECT * FROM packages WHERE id=$id ";
    } else {
        //redirect  
        header('Location: ' . './index.php');
    }
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    ?>


    <div class="container-fluid pt-3">

        <div class="title font-weight-bold text-center h1 mt-3"><?php echo $row['name']; ?></div> 
        <div>
            <div class="feature-details text-center">
                <div>
                    <span class="mr-1"><i class="fa fa-map-marker"></i> <?php echo $row['location']; ?></span>
                    <span class="mr-1"><i class="fa fa-sun-o"></i> <?php echo $row['days']; ?> days</span>
                    <span class="mr-1"><i class="fa fa-moon-o"></i> <?php echo $row['nights']; ?> nights</span>
                    <span class="mr-1"><i class="fa fa-money"></i> Rs <?php echo $row['price']; ?></span>
                </div>
            </div>
        </div>


        <div class="desc text-justify px-5 py-3">
            <p class="font-weight-light">
                <?php echo $row['desc']; ?>
            </p>
        </div>

        <!-- images  -->
        <div class="row py-3">
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['image']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_1']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_2']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_3']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_4']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_5']; ?>)">
                </div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="single-package-img-container" style="background: url(images/<?php echo $row['img_6']; ?>)">
                </div>
            </div>
        </div>
        <!--ENDS images  -->

        <!-- Booking form  -->
        <div class="row justify-content-center py-3">
            <div class="col-12 col-md-8">
                <div class="booking-form-container">
                    <div class="title font-weight-bold text-center h2 mt-3">预定表 </div>

                    <div class="card card-body ">
                        <form action="./model/packagebooking.php" method="POST">
                            <div class="form-group">
                                <label>景点名称</label>
                                <input name="package_name" required type="text" class="form-control" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>姓名</label>
                                <input name="name" type="text" required class="form-control" placeholder="输入姓名">
                            </div>
                            <div class="form-group">
                                <label>联系电话</label>
                                <input name="phone" type="text" required class="form-control" placeholder="输入联系电话">
                            </div>
                            <div class="form-group">
                                <label>地址</label>
                                <input name="address" type="text" required class="form-control" placeholder="输入地址">
                            </div>
                            <div class="form-group">
                                <label>邮箱</label>
                                <input name="email" type="email" required class="form-control" placeholder="输入邮箱">
                            </div>
                            <div class="form-group">
                                <label>游客数量</label>
                                <input name="participants"  required type="text" class="form-control" placeholder="输入游客数量">
                            </div> 
                            <div class="form-group">
                                <label>预定日期</label>
                                <input name="reservation_date" required type="date" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary ">预定 </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--!Ends Booking form  -->

    </div>






    <section class="footer py-3">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3">
					<img src="images/logo.png" class="footer-logo img-fluid">
					<p class="pt-1 text-justify">Daevak Tours and Travels. A website that provides you with every suitable packages with thrilling prices.</p>
				</div>
				<div class="col-md-3">
					<h5 class="text-capitalize font-weight-bold">Contact</h5>
					<div>
						<i class="fa fa-phone-square"></i>9800000000
					</div>
					<div>
						<i class="fa fa-envelope"></i>toursntravels@gmail.com
					</div>
					<div>
						<i class="fa fa-home"></i>Kalanki, Kathmandu
					</div>
				</div>
				<div class="col-md-3">
					<h5 class="text-capitalize font-weight-bold">Follow Us On</h5>
					<div>
						<i class="fa fa-facebook-official"></i>Facebook/Toursntravels
					</div>
					<div>
						<i class="fa fa-youtube-play"></i>YouTube/Toursntravels
					</div>
				</div>
				<div>
					<button data-toggle="modal" data-target="#vehiclerentalModal" type="button" class="book-btn">Vehicle Rental</button>
					<div class="modal fade" id="vehiclerentalModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content bg-dark">
								<div class="modal-header">
									<h5 class="modal-title">Vehicle Rental</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="./model/vehiclerental.php" method="POST">
										<div class="form-group">
											<label>Full Name</label>
											<input name="name" type="text" class="form-control" placeholder="Enter Full Name" required>
										</div>
										<div class="form-group">
											<label>Contact No</label>
											<input name="phone" type="text" class="form-control" placeholder="Enter Contact No" required>
										</div>
										<div class="form-group">
											<label>Address</label>
											<input name="address" type="text" class="form-control" placeholder="Enter Address" required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input name="email" type="email" class="form-control" placeholder="Enter Email" required>
										</div>
										<div class="form-group">
											<label>Reservation From</label>
											<input name="reservation_from" type="date" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Reservation To</label>
											<input name="reservation_to" type="date" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Note (Optional)</label>
											<textarea name="note" class="form-control"></textarea>
										</div>
										<button type="submit" class="btn btn-danger ">BOOK</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<hr class="mt-3">
		</div>
		<div class="container text-center">
			<h5 class="font-weight-light">&copy; 2020 Copyright Reserved <br> Travels and Tours</h5>
		</div>
	</section>
</body>

</html>