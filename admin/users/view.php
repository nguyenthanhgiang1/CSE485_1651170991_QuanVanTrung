<?php
   include("../../include/ad_session.php");
   //----------------------------------------------
     $t=$_GET['edi'];
   $sql="select * from users where userid=$t";
   $result=mysqli_query($conn,$sql);
   $r = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="../../asset/css/style.css">
        <title>Thông tin cá nhân</title>
  </head>
  <body>
  <?php include "../../include/ad_navbar.php" ?>
<!-- --------------------------------------------------------------- -->
    <div class="row">
    <?php include "../../include/ad_list.php" ?>
<!-- ---------------------------------------------------------------------- -->
<div class="col-lg-10" style="min-height:600px;">
<!-- ---------------------------------------------------------------------- -->



<h4 class="m-3">Quản lý tài khoản người dùng</h4>
<div class="row m-0">
    <a href="create.php" class="btn btn-success m-3">Thêm mới</a>
    <a href="index.php" class="btn btn-success m-3">Xem toàn bộ</a>
</div>
<div class="container bg-light"><hr>
      <div class="row">
         <div class="col-5 p-3">
         <img class="border border-dark" src="<?php echo "../asset/image/".$r['avata']; ?>" width="200px" alt="Bạn có thể thêm ảnh ở phần sửa thông tin">
         </div>
      </div>
      <div class="row">
      <div class="col-6"><span style="font-weight:bold">Tên : </span><?php echo $r['first_name'] ?></div>
      <div class="col-6"><span style="font-weight:bold">Họ và đệm : </span><?php echo $r['first_name'] ?></div>
      </div>
      <div class="row mt-3">
      <div class="col-6"><span style="font-weight:bold">Email : </span><?php echo $r['email'] ?></div>
      <div class="col-6"><span style="font-weight:bold">Số điện thoại : </span><?php echo $r['phone'] ?></div>
      </div>

      <div class="row mt-3">
      <div class="col-12"><span style="font-weight:bold">Địa chỉ 1 : </span><?php echo $r['address1'] ?></div>
      </div>
      <div class="row mt-3">
      <div class="col-12"><span style="font-weight:bold">Địa chỉ 2 : </span><?php echo $r['address2'] ?></div>
      </div>
      <div class="row mt-3">
      <div class="col-5"><span style="font-weight:bold">Thành phố : </span><?php echo $r['city'] ?></div>
      <div class="col-4"><span style="font-weight:bold">Quốc gia : </span><?php echo $r['state_country'] ?></div>
      <div class="col-3"><span style="font-weight:bold">Zip : </span></div>
      </div>
      <div class="row mt-3">
         <div class="col-5"><span style="font-weight:bold">ten tai khoan : </span><?php echo $r['username'] ?></div>
      <div class="col-4"><span style="font-weight:bold">Loại tài khoản : </span>  <?php if($r['user_level']==0){
          echo "người dùng"; 
          }else{ echo "Quản trị"; }
          ?></div>
      <div class="col-3"><span style="font-weight:bold">Trạng thái : </span> <?php if($r['statu']==0){ echo "Chưa kích hoạt";} else{ echo "Đã kích hoạt";} ?></div>
     
      </div> 
      <div class="row">
      <a href="index.php" class="mt-4 mb-4 btn btn-success mr-3">Quay lại</a>
      <a href="edit.php?edi=<?php echo $t; ?>" class="mt-4 mb-4 btn btn-success">Sửa thông tin</a>
      </div>   
      
</div>
  

</div>


<!-- ------------------------------------------------------------------------------ -->
</div>

<!-- ------------------------------------------------------------------------------ -->
<!-- </div> -->
<div class="row bg-success p-3"><p>day la chan trang</p></div>








<!--hien thi chi tiet-->
<!-- <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xem tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
                </div>

                <form action="index.php" method="POST">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row"><h6>Tên tài khoản :</h6>  Nguyenthanhgiang</div>
                        <div class="row"><h6>Tên Email :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Số điện thoại :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Địa chỉ 1 :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Địa chỉ 2 :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Thành phố :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Quốc gia :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Zip-code :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Loại tài khoản :</h6> Nguyenthanhgiang</div>
                        <div class="row"><h6>Trạng thái :</h6> Nguyenthanhgiang</div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </form>


            </div>
        </div>
    </div> -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>