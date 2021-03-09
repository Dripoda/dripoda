<?php
$con=mysqli_connect("localhost","root","root","testdatabase")  or die( mysqli_connect_error() );  
session_start();


if (  isset(  $_POST['submit']  )  )
{
  $user=  $_POST['user'];
  $password=  $_POST['password'];  
  $query = mysqli_query($con," SELECT * FROM testtable WHERE user='$user' AND password='$password'  ");
  $row= mysqli_num_rows($query);
  if( $row==1 ) 
    {  if($query) 
	     { 
	        $ligne=mysqli_fetch_assoc($query);  
			$_SESSION['user']=$ligne["user"]; 
            header("location:/index.php");		
		  }	
	}
   else
    {	
	  echo "<script>alert('your information is not correct')</script>"; 
	}
}
?>






<form method="POST"  action="" >
<input type="text"      placeholder="user"      name="user"      id="" class="" />
<input type="password"  placeholder="password"  name="password"  id="" class="" />
<input type="submit"    value="submit"          name="submit"  id="" class="" />
</form>























