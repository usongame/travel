<html>

<head>
    <title>旅游网</title>
    <meta name="veiwport" content="width=devide-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="images/style.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

    <!-- //navbar -->
    <?php include "./nav.php"; ?>
    <!--ENds //navbar -->

    <div class="container-fluid">
        <!-- content -->

        <div class="card card-body m-3">
            <h5 class="card-title">相册管理</h5>
        </div>

        <!-- modal  -->
        <div class="mt-2 ml-3">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#newgalleryModal">
                添加新的相册
            </button>
        </div>
        <div class="modal fade" id="newgalleryModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> 添加新的相册y</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-body">
                            <form action="../model/addgallery.php" method="post">
                                <div class="form-group">
                                    <label>相册名称</label>
                                    <input name="name" type="text" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">提交</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--ENDS modal  -->


        <div class="row mt-5 justify-content-center">

            <div class="col-12 col-md-4 mt-3">
                <ul class="list-group">
                    <?php
                    include '../model/connection.php';
                    $sql = "SELECT * FROM gallery";
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li class="list-group-item">' . $row['name'] . '
                        <a href="./viewgallery.php?id=' . $row['id'] . '" class="ml-5 btn btn-sm btn-dark mt-2"> 查看</a>
                        <a href="../model/removegallery.php?id=' . $row['id'] . '" class="btn btn-sm btn-danger mt-2"> 删除</a>
                        </li> ';
                        //  <img src="../images/gallery/' . $row['image'] . '" class="img-fluid" style="height:250px;">
                    }
                    ?>
                </ul>
            </div>
        </div>


        <!--ENDS content -->

    </div>
</body>

</html>