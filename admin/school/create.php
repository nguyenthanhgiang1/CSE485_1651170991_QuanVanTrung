<?php
 include("../../include/ad_session.php");
//--------------------------------------------------
    $id=$name=$des=$place=$date1=$date2=$title="";
    // if(isset($_GET['edi'])){
    //   $_SESSION['edicom']=$_GET['edi'];
    // }
    // echo $_SESSION['ediuse'];
    if(isset($_POST['submit'])){
      $name=$_POST['c_name'];
      $des=$_POST['c_des'];
      $place=$_POST['c_place'];
      $date1=$_POST['c_date1'];
      $date2=$_POST['c_date2'];
      $title=$_POST['c_title'];
     
    //   $t=$_SESSION['edicom'];
      $sql="insert into school (s_name,s_description,s_place,s_date1,s_date2,s_title)
      values  ('$name','$des','$place','$date1','$date2','$title')";
    //   }else{
    //     $t=$_SESSION['edicom'];
    //     $sql="update users
    //     set  first_name='$fname',last_name='$lname' ,email='$email',password='$password',user_level='$level',address1='$add1',address2='$add2',city='$city',state_country='$country',phone='$phone',statu=$status,username='$username'
    //     where userid=$t;
    //     ";
    //   }
      
       $result=mysqli_query($conn,$sql);
      // echo $sql;
      header("location:index.php");
    }
     //hien thi du lieu
    //  $t=$_SESSION['ediuse'];
    //  $sql="select * from company where c_id=$t";
    //  $result=mysqli_query($conn,$sql);
    //  $r=mysqli_fetch_assoc($result);

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
        <title>Thông tin cá nhân</title>  </head>
  <body>
  <?php include "../../include/ad_navbar.php" ?>
<!-- --------------------------------------------------------------- -->
    <div class="row">
    <?php include "../../include/ad_list.php" ?>
<!-- ---------------------------------------------------------------------- -->
<div class="col-lg-10" style="min-height:600px;">
<!-- ---------------------------------------------------------------------- -->




<div class="row m-0">
<a href="create.php" class="btn btn-success m-3">Thêm mới</a>
    <a href="index.php" class="btn btn-success m-3">Xem toàn bộ</a>
</div>
<h4 class="m-3 text-center">Thêm trường học</h4>
<div class="container bg-light"><hr>
<!-- //================================================================ -->

<form  action="create.php" method="post" >
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Tên trường</label>
    <input type="text" class="form-control" name="c_name" aria-describedby="emailHelp" value="<?php echo $name ?>">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Học về</label>
    <input type="text" class="form-control" name="c_title" aria-describedby="emailHelp" value="<?php echo $title ?>">
  </div>
  <div class="form-group mt-2">
  <label for="floatingTextarea2">Chuyên về</label>
  <textarea class="form-control" placeholder="Viết mô tả sản phẩm" name="c_des" id="floatingTextarea2" style="height: 100px; "><?php echo $des ?></textarea>
</div> 
<div class="form-group mt-2">
    <label for="exampleInputEmail1">Thành tích</label>
    <input type="text" class="form-control" name="c_place" aria-describedby="emailHelp" value="<?php echo $place ?>">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Ngày bắt đầu</label>
    <input type="date" class="form-control" name="c_date1" aria-describedby="emailHelp" value="<?php echo $date1 ?>">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Ngày kết thúc</label>
    <input type="date" class="form-control" name="c_date2" aria-describedby="emailHelp" value="<?php echo $date2 ?>">
  </div>

  <input type="submit" class="btn btn-primary mt-2 mb-4" name="submit" value="Submit"></input>
</form>
   
</div>
  
</div>



<!-- ------------------------------------------------------------------------------ -->
</div>
<!-- ------------------------------------------------------------------------------ -->
<!-- </div> -->
<?php include "../../include/ad_footer.php" ?> </body>
</html>