<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<!--Script for adding data to the database-->
<?php
	include_once("loginhead.php");
	$name="";
	$category="";
	$app_to="";
	if(isset($_POST["btnsubmit"]))
	{
		$name=$_POST["txtname"];
		$category=$_POST["txtcat"];
		$app_to=$_POST["txtappl"];
		$con=mysqli_connect("localhost","root","","ugc");
		$qry="insert into scheme (SCHEME_NAME,SCHEME_CATEGORY,APPLICABLE_TO) values ('$name','$category','$app_to')";
		$res=$con->query($qry);
		echo $qry;
	}
?>
<!--Page for Adding Schemes-->
<body>
	<section>
	<div align="center" style="border:thick; border-color:#FFFFFF; background-color:#FFFFFF;">
		<!--Heading of the page-->
		<div style="color:#000000">
			<h3>After filling the below details don't forget to press submit</h3>
		</div>	
		<!--Form Entering Scheme Name-->
		<form name="frm1" method="post">
		<div>
			<label style="color:#000000">Scheme Name</label>
				<input type="text" align="right" name="txtname" />
		</div>
		<!--For Entering Scheme Category-->
		<div>
			<label style="color:#000000">Scheme Category</label>
				<input type="text" align="right" name="txtcat" />
		</div>
		<!--For Entering Scheme Applicable-->
		<div>
			<label style="color:#000000">Scheme Applicable To</label>
				<input type="text" align="right" name="txtappl" />
		</div>
		<!--For Submitting Data-->
		<div>
				<input type="submit" name="btnsubmit" />
		</div>
		</form>
	</div>
	</section>
</body>
</html>
