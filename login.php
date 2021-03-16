<?php
  require ('src/index.php');
  use NanoGas\Modules\Connection\Mysql;
  if(!empty(Mysql::getInstance()->getConnection()->getSession()->getUser())) {
      header('Location:/index.php');
  }
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Đăng nhập</title>
</head>
<body style="margin:10%;background-image: url('images/bg.jpg');">
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
					<center><b>Bạn đã chưa có tài khoản ?</b> <br></b><a href="add_user.php">Đăng ký</a></center>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php
$conn = Mysql::getInstance();
if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user = $conn->getConnection()->login($user_email, $user_pass);

    if(!empty($check_user))
    {
        echo "<script>window.open('index.php','_self')</script>";

        $_SESSION['email']=$user_email;

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
