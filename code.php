<?php
$connection=mysqli_connect("localhost","root","","subtraction");
if (isset($_POST['submit']))
{
	$Payroll_id=$_POST['e1'];
	$Name=$_POST['n1'];
	$Role=$_POST['a1'];
	$Address=$_POST['d1'];
	$Salary=$_POST['s1'];
	$Loan=$_POST['l1'];
	$Tax=$_POST['t1'];
	$Phone_No=$_POST['p1'];
	$Email=$_POST['m1'];
	$sql="insert into information (Payroll_id,Name,Role,Address,Salary,Loan,Tax,Phone_No,Email) values ('$Payroll_id','$Name','$Role','$Address','$Salary','$Loan','$Tax','$Phone_No','$Email')";
	$result=mysqli_query($connection,$sql);
	
	if ($result)
	{
		echo "data inserted";
	}
	else
	{
		echo "not inserted"; 
	}
}
?>
