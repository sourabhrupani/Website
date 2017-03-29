<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
	$name="";
	if(isset($_POST["btnsubmit"]))
	{
		$name=$_POST["txtname"];
		$con=mysqli_connect("localhost","root","","ugc");
		$qry="delete from scheme where SCHEME_NAME='$name'";
		$res=$con->query($qry);
	}
?>
<body>
	<!--Page for deleting an existing schemes-->
	<section>
		<div>
		<!--Page Heading-->
			<div>
				<h3>You're About to Delete a Scheme</h3>
			</div>
			<form name="frm1" method="post">
			<!--form for input scheme name-->
			<div>
				<label>Enter Scheme Name</label>
				<div>
					<input type="text" name="txtname" />
				</div>
			</div>
			<div>
				<label>This action cannot be undone</label>
			</div>
			<!--Submit for deleting schemes-->
			<div>
				<input type="submit" name="btnsubmit" />
			</div>
			</form>
		</div>
	</section>
</body>
</html>
