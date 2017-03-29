<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once("loginhead.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
	section.def {
					background-color:#FFFFFF;
				}
	div.abc {
			color:#FF6633;
			margin-left:4px;
			padding:3px;
			word-spacing:1px;
			word-spacing:1;
		}
	div.xyz {
			color:#6699CC;
			margin-left:4px;
			padding:3px;
			word-spacing:1;
	}	
</style>
</head>
<!--Page for Managing Schemes-->
<body>
	<!--User has to choose-->
	<section class="def">
		<!--Page Heading-->
		<div class="abc">
			<h3 class="ghi">What do you want to do?</h3>
		</div>
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
	</section>
</body>
</html>
