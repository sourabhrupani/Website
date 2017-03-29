<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
	$Str="";
	$con=mysqli_connect("localhost","root","","ugc");
	$qry="select * from scheme";
	$res=$con->query($qry);
	$str="<table align='center' border='1'><tr><th>Scheme_id</th><th>Scheme_name</th><th>Scheme_Category</th><th>Applicalbe_to</th></tr>";
		while($row=$res->fetch_array())
		{
			$str.="<tr><td>".$row[0]. "</td><td>" .$row[1]. "</td><td>" .$row[2]. "</td><td>" .$row[3]. "</td></tr>" ."<br>"; 
		}
		$str.="</table>";
		echo $str;
?>
<body>
</body>
</html>
