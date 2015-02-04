<!DOCTYPE html>
<head>
<title>Register</title>
<body>
<?php 

<h1><b>Register</b> your Details</h1>
			
<form name="Registration" action="pCustomer_insert.php" method="post" >

<table align="center" cellspacing="20">

<tr>
<td>FIRST NAME</td>
<td><input type="text" name="FirstName" maxlength="30"/>

</td>
</tr>

<tr>
<td>LAST NAME</td>
<td><input type="text" name="LastName" maxlength="30"/>

</td>
</tr>


<tr>
<td>STREET</td>
<td><input type="text" name="StreetName" maxlength="30" />

</td>
</tr>  

<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />

</td>
</tr>   

<tr>
<td>ZIPCODE</td>
<td><input type="text" name="ZipCode" maxlength="6" />

</td>
</tr>

<tr>
<td>PHONE</td>
<td>
<input type="tel" name="Phone" maxlength="10" />

</td>
</tr>

<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email" maxlength="100" /></td>
</tr>
      
<tr>
<td>PASSWORD</td>
<td><input type="password" name="Password" maxlength="100" /></td>
</tr>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
header("Location: plogin.php");
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
?>
</body>
</html>