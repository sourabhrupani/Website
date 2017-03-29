<?php
include_once("loginhead.php");
session_start();

$uname="";
$pwd="";
$con=mysqli_connect("localhost","root","","dbkinka");
$error="<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Alert!</h4>
                The Username or password that you've entered is incorrect. 
				 <a href='forgotPass1.php'>Forgotten password?</a>
    			</div>";

$Aerror="<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-ban'></i> Alert!</h4>
                Your account is not active!!! Click on link to active.
				 <a href='forgotPass1.php'>Active Account</a>
       			</div>";

if(isset($_POST["btnSubmit"]))
{
$uname=$_POST["txtUname"];
$pwd=$_POST["txtPwd"];
$sqr="select * from admin where Email='$uname' AND Password='$pwd'";
$res=$con->query($sqr);
$count=mysqli_num_rows($res);

	if($count==1)
	{
		$row=$res->fetch_array();
		$_SESSION["Aid"]=$row[0];
		$_SESSION["Fname"]=$row[1];
		$_SESSION["Lname"]=$row[2];

		?>
		<script type="text/javascript">
		window.location="../admin/ahome.php";
		</script>
		<?php 
	}
	else
    {
		$sqr1="select * from company where Email='$uname' AND Pwd='$pwd'";
		$res1=$con->query($sqr1);
		$sum=mysqli_num_rows($res1);

		if ($sum==1)
		{
			$row1=$res1->fetch_array();
			$_SESSION["Compid"]=$row1[0];
			$_SESSION["Catid"]=$row1[12];
			$_SESSION["Compname"]=$row1[1];
			
			?>
			<script type="text/javascript">
			window.location="../company/chome.php";
			</script>
			<?php
		}
		else
		{	
			$sqr2="select * from user where Email='$uname' AND Password='$pwd' and IsActive='yes' and IsAuthenticate='yes'";			
			$res2=$con->query($sqr2);
			$sum1=mysqli_num_rows($res2);
			
				if($sum1==1)
				{
					$row2=$res2->fetch_array();
					$_SESSION["Uid"]=$row2[0];
					$_SESSION["Fname"]=$row2[1];
					?>
				
					<script type="text/javascript">
					window.location="../member/mhome.php";
					</script>
					<?php
				}
				else
					{
						echo $error;
					}

		}
	}
}
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
 	 <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b></b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form name="frm1" method="post">
      <div class="form-group has-feedback">

        <input type="text" class="form-control" name="txtUname" placeholder="UserName">
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtPwd" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btnSubmit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="forgotPass1.php">I forgot my password</a><br>
    <a href="UserRegistration.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>