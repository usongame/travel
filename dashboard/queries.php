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
            <h5 class="card-title">留言</h5>
        </div>
        <div class="table-responsive card card-body p-4">
            <table class="table">
                <thead>
                    <tr> 
                        <th>姓名</th>
                        <th>电话</th> 
                        <th>邮箱</th> 
                        <th>留言</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../model/connection.php';
                    $sql = "SELECT * FROM queries";
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) { 
                        echo ' 
                            <tr> 
                                <td>
                                ' . $row['name'] . '
                                </td>
                                <td>
                                ' . $row['phone'] . '
                                </td> 
                                <td>
                                ' . $row['email'] . '
                                </td>
                                <td>
                                ' . $row['querie'] . '
                                </td> 
                            </tr> 
                        '; 
                    }
                    ?>


                </tbody>
            </table>
        </div>
        <!--ENDS content -->

    </div>
</body>

</html>