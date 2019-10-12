@extends('Account.master')
@section('title',"login")
@section('content')
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <link rel="stylesheet" href="/FLRV-CH/local/public/assets/Account/login.css">
    <script>
        $(document).ready(function () {
            $('input').click(function (e) {
               $('label').removeClass('An');
                $('label').addClass("hienra");
                $('input').attr('placeholder', "");

            });
            $('input').blur(function (e) {
                if($('#us').val()!=""||$('#pa').val()!=""){

                }
                else{
                    $('label').removeClass('hienra');
                $('label').addClass("An");
                $('#pa').attr('placeholder', "Mật Khẩu");
                $('#us').attr('placeholder', "Tài Khoản");
                }


            });
        });
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <div class="container">
        <div class="row">
            <div class="col-md-4 column-1">

            </div>
            <div class="col-md-4 column-2">
                <div class="form-group">
                    <form action="" method="post">

                        <h2 style="text-align: center;">Đăng Nhập</h2>
                        <br>
                            <label class="An" for="">Tài khoản</label>
                            <input type="text" name="Acc" id="us" class="form-control" placeholder="Tài Khoản"
                                aria-describedby="helpId">


                      <br>

                            <label class="An" for="">Mật Khẩu</label>
                            <input type="password" name="Pass" id="pa" class="form-control" placeholder="Mật Khẩu"
                                aria-describedby="helpId">





                        <br>
                        <button type="submit" id="btn-login" class=" btn-block">Đăng Nhập</button>
                    </form>
                    <br>
                    <div id="bottom-text">Chưa có tài khoản <a href="account/signup">Đăng kí tại
                            đây!!</a></div>

                </div>
            </div>
            <div class="col-md-4 column-3">

            </div>
        </div>

    </div>

</body>

</html>
@stop

