<?php
include("db.php");
session_start();

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select username,password from Login" ;
	$result=mysqli_query($con,$sql);
	
	
	
	while($row=mysqli_fetch_array($result) )
   	{
		$correctuser=$row["username"];
		$correctpwd=$row["password"];

   if($username==$correctuser && $password==$correctpwd)
   {
	   $_SESSION['admin']=$username;
	   header('Location:del.php');  //changes to be made
   }
   else
   {
    
   }
	
  }
}
else{
	header('Location:login.php');
}
?>