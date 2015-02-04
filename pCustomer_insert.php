<?
	
	$LastName =$_POST['FirstName'];
 
	$FirstName =$_POST['LastName'];
  
	$StreetName =$_POST['StreetName'];
 
	$City =$_POST['City'];
 
	$ZipCode =$_POST['ZipCode'];
 
	$Phone =$_POST['Phone'];
 
	$Email =$_POST['Email'];
  
 
	$Password =$_POST['Password'];


 mysql_connect("localhost", "amajidah", "amajidah") or die(mysql_error()); 
 mysql_select_db("db_Sum14_amajidah") or die(mysql_error()); 

$sql= mysql_query("INSERT INTO Customer(FirstName,LastName,StreetName,City,ZipCode,Phone,Email,Password) VALUES ('$LastName','$FirstName','$StreetName','$City','$ZipCode','$Phone','$Email','$Password')");
 

 If(!empty($sql))
	{
		
		echo "<script>";
		echo "window.alert('Your data is successfully added');window.location='Login.php'";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "window.alert('Your data is not inserted');window.location='Register.php'";
		echo "</script>";
	}
 ?> 