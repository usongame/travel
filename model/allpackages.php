<?php

include 'connection.php';


$sql = "SELECT * FROM packages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // $row = mysqli_fetch_assoc($result);

  while ($row = mysqli_fetch_assoc($result)) {
    echo '
        <div style="cursor:pointer;" class="card card-body d-flex" data-toggle="collapse" data-target="#collapseExample' .   $row['id'] . '" aria-expanded="false" >
        <div>
         <h5 class="card-title"><i class="fas fa-chevron-down"></i> 景点 : ' .   $row['name'] . ' </h5></div>
         
        </div>
 <div class="card card-body collapse"  id="collapseExample' .   $row['id'] . '">
                   

                    <table class="table">
                        <tr>
                            <td>图片</td>
                            <td> <img src="../images/' .

      $row['image']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                        <tr>
                            <td>位置</td>
                            <td>' . $row['location'] . '</td>
                        </tr>
                        <tr>
                            <td>天</td>
                          <td>' . $row['days'] . '</td>
                        </tr>
                        <tr>
                            <td>夜</td>
                          <td>' . $row['nights'] . '</td>
                        </tr>
                        <tr>
                            <td>价格</td>
                          <td>' . $row['price'] . '元</td>
                        </tr>
                          <tr>
                            <td>描述</td>
                          <td>' . $row['desc'] . '</td>
                        </tr>
                          <tr>
                            <td>图片 1</td>
                            <td> <img src="../images/' .

      $row['img_1']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                          <tr>
                            <td>图片 2</td>
                            <td> <img src="../images/' .

      $row['img_2']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                          <tr>
                            <td>图片 3</td>
                            <td> <img src="../images/' .

      $row['img_3']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                          <tr>
                            <td>图片 4</td>
                            <td> <img src="../images/' .

      $row['img_4']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                          <tr>
                            <td>图片 5</td>
                            <td> <img src="../images/' .

      $row['img_5']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                          <tr>
                            <td>图片 6</td>
                            <td> <img src="../images/' .

      $row['img_6']
      .
      '"class="img-fluid" style="max-height:200px;"> </td>
                        </tr>
                        <tr>
                        <td>
                        操作
                        </td>
                        <td>
                        <button data-toggle="modal" data-target="#editpackageModal-' . $row['id'] . '" class="btn btn-dark">编辑景点</button> 
                        <a href="../model/removepackage.php?id=' . $row['id'] . '" class="btn btn-danger">删除景点</a></td>
                        </tr>
                    </table>
                </div>

';
    //for edit

    echo '

<div class="modal fade" id="editpackageModal-' . $row['id'] . '" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">编辑景点</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="../model/editpackage.php" method="post" enctype="multipart/form-data">
                                <div class="form-group"> 
                                    <input name="id" style="display:none;" required value="' . $row['id'] . '">
                                </div>
                                <div class="form-group">
                                    <label>景点名称</label>
                                    <input name="name" type="text" class="form-control" required value="' . $row['name'] . '">
                                </div>
                                <div class="form-group">
                                    <label>位置</label>
                                    <input name="location" type="text" class="form-control" required value="' . $row['location'] . '">
                                </div>
                                <div class="form-group">
                                    <label>天数</label>
                                    <input name="days" type="number" class="form-control" required value="' . $row['days'] . '">
                                </div>
                                <div class="form-group">
                                    <label>夜数</label>
                                    <input name="nights" type="number" class="form-control" required value="' . $row['nights'] . '">
                                </div>
                                <div class="form-group">
                                    <label>图片</label>
                                    <input name="image" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>价格</label>
                                    <input name="price" type="text" class="form-control" required value="' . $row['price'] . '"> 
                                </div>
                                <div class="form-group">
                                    <label>描述</label>
                                    <textarea name="desc" type="text" class="form-control" required>' . $row['desc'] . '</textarea >
                                </div>
                                <div class="form-group">
                                    <label>图片 1</label>
                                    <input name="image_1" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>图片 2</label>
                                    <input name="image_2" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>图片 3</label>
                                    <input name="image_3" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>图片 4</label>
                                    <input name="image_4" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>图片 5</label>
                                    <input name="image_5" type="file" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>图片 6</label>
                                    <input name="image_6" type="file" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">提交</button>
                            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button> 
      </div>
    </div>
  </div>
</div>
';
  }
  /* free result set */
  mysqli_free_result($result);
}


/* close connection */
mysqli_close($conn);
