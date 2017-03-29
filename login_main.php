<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include_once("loginhead.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  />
<!-- Font Awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awsome/4.5.0/css/font-awsome.min.css"  />
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"  />
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css"  />
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"  />
</head>

<body>
<div class="col-md-3" align="center">
	<div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">LOGIN AS</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				
                </button>
				
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
              <!--User has to choose-->
	<section class="def">
		<!--Page Heading-->
		<!--Login as Administrator-->
		<div class="abc">
			<div class="xyz">
				<label><a href="login_admin.php">Admin</a></label>
			</div>
		</div>
		<!--Login as Scheme Handler-->
		<div class="abc">
			<div class="xyz">
				<label><a href="login_scheme.php">Scheme Handler</a></label>
			</div>
		</div>
		<!--Login as Institute-->
		<div class="abc">
			<div class="xyz">
				<label><a href="login_institute.php">Institute</a></label>
			</div>
		</div>
            </div>
            <!-- /.box-body -->
          </div>
		  </div>
	<!--./wrapper-->
	<!--jQuery 2.2.3-->
	<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!--Bootstrap 3.3.6-->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--AdminLTe-->
	<script src="../dist/js/app.min.js"></script>
</body>
</html>
