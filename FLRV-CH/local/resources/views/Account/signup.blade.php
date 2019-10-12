@extends('Account.master')
@section('title','Đăng kí')
@section('content')
<!doctype html>
<html lang="en">

<head>
  <title>Đăng kí</title>
  <base href="{{asset('')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
  <script src="/FLRV-CH/local/public/assets/Dangki.js"></script>
  <link rel="stylesheet" href="/FLRV-CH/local/public/assets/Account/dangki.css">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <div class="row">
    <div class="col-md-4 column-1">

    </div>
    <div class="col-md-4 column-2">
      <div class="form-group">
        <form action="" method="POST">
          <h3>Đăng kí</h3>
          <br>
          <div id="in4">
            <p>Thông tin tài khoản</p>
          </div>
          <!-- --------------------------------------------------------->
          <label for="">Username</label>
          <input type="text" name="Username" id="us" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
          <br>
          <!-- --------------------------------------------------------->
          <label for="">Password</label>
          <input type="password" name="password" id="pa" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
          <!-- --------------------------------------------------------->

          <br>
          <div id="in4">
            <p>Thông tin người dùng</p>
          </div>
          <!-- --------------------------------------------------------->
          <label for="">Họ Tên</label>
          <input type="text" name="hoten" id="pa" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
          <!-- --------------------------------------------------------->
          <br>
          <label for="">Ngay sinh</label>
          <input type="date" name="ngaysinh" id="pa" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
          <br>
          <!-- --------------------------------------------------------->

          <!-- --------------------------------------------------------->
          <input id="btnDangKi" class="btn btn-primary btn-block " name="dangki" type="submit" value="Dang ki">



        </form>

        <?php
          if(isset($_POST['dangki']) ){
            $Username=$_POST['Username'];
            $Password=$_POST['password'];
            $Name=$_POST['hoten'];
            $NgaySinh=$_POST['ngaysinh'];
            if($Username=="" or $Password=="" or $Name=="" or $NgaySinh==""){
              echo '<script>
              alert ("Vui lòng nhập đầy đủ thông tin");
            </script>';
            }
            else{



                $sql='INSERT INTO account (account.UserName,account.`Password`,account.`Name`,account.DateOfBirth) VALUES("'.$Username.'","'.$Password.'","'.$Name.'","'.$NgaySinh.'")';
              $db->EXupdate($sql);
              echo '<script>
              alert ("Đăng kí thành công");
            </script>
            <a href="?action=loginM1">Đăng kí thành công!<br>Đăng nhập tại đây!</a>
            ';

            }

          }

        ?>
      </div>
    </div>
    <div class="col-md-4 column-3">

    </div>
  </div>

</body>

</html>
@stop

