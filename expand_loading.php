<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include_once("loginhead.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<div class="col-md-3">
	<div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">SCHEMES</h3>

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
		<!--Adding New Schemes-->
		<div class="abc">
			<div class="xyz">
				<label><a href="Adding_Schemes.php">Add Scheme</a></label>
			</div>
		</div>
		<!--Delete Existing Schemes-->
		<div class="abc">
			<div class="xyz">
				<label><a href="Deleting_Schemes.php">Delete Scheme</a></label>
			</div>
		</div>
		<!--See Schemes-->
		<div class="abc">
			<div class="xyz">
				<label><a href="disp_schemes.php">See Schemes</a></label>
			</div>
		</div>
            </div>
            <!-- /.box-body -->
          </div>
		  </div>
		  <br />	
		  <div class="col-md-3">
          <div class="box box-danger box-solid">
            <div class="box-header">
              <h3 class="box-title">Loading state</h3>
            </div>
            <div class="box-body">
              The body of the box
            </div>
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>
          <!-- /.box -->
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
