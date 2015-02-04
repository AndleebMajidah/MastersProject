<?php	
$Email=$_POST['Username'];
$Password=$_POST['Password'];

	$con=mysql_connect("localhost", "amajidah", "amajidah");
       
	// Check connection
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	} 

mysql_select_db("db_Sum14_amajidah", $con);
If(!empty($Email) && !empty($Password))
{

$result=mysql_query("Select Password from Customer where Email='$Email'");
while($log=mysql_fetch_array($result))
{
If(!empty($result))
{
	If($Password==$log['Password'])
	{   
		$cid=mysql_query("Select * from Customer where Email='$Email'");
        $log1=mysql_fetch_array($cid);
		
		//echo $log1['Customer_ID'];
	    $_SESSION['sess_user_id'] = $log1['Customer_ID'];
	    $_SESSION['sess_username'] = $log1['FirstName'];
	    session_write_close();
	    	
	}
	else
	{
		echo "Username or password doesnot match.
				</br><a href='plogin.php'>Please login again</a>";
		
	}

}
}
}
else
{
	echo "Username or Password are empty";
}
?>			