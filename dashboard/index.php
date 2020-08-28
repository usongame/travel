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

    <div class="container-fluid" > 
        <!-- content --> 

        <!-- modal  -->
        <div class="mt-2 ml-3">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addnewpackagemodal">
                添加新的旅游景点
            </button>
        </div>
        <div class="modal fade" id="addnewpackagemodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> 添加新的旅游景点</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-body">
                            <form action="../model/addpackage.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>景点名称</label>
                                    <input name="name" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>位置</label>
                                    <input name="location" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>天数</label>
                                    <input name="days" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>夜数</label>
                                    <input name="nights" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片</label>
                                    <input name="image" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>价格</label>
                                    <input name="price" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>描述</label>
                                    <textarea name="desc" type="text" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>图片 1</label>
                                    <input name="image_1" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片 2</label>
                                    <input name="image_2" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片 3</label>
                                    <input name="image_3" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片 4</label>
                                    <input name="image_4" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片 5</label>
                                    <input name="image_5" type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>图片 6</label>
                                    <input name="image_6" type="file" class="form-control" required>
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

        <!-- packages  -->



        <div>
            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">景点</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <?php include "../model/allpackages.php"; ?>

                </div>
            </div>
        </div>


        <!-- ENDS.packages  -->


        <!--ENDS content -->

    </div>
</body>

</html>