<?php

$Login=false;
$err=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $conn = new mysqli('localhost','root','','csdb');
	if($conn->connect_error){
		echo "$conn-> No connection successfully";
	die("Connection Failed : ". $conn->connect_error);
    }

    $Email=$_POST["Email"];
    $Password=$_POST["Password"];

    $sql="select * from admin where Email='$Email' AND Password='$Password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $Login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['Email']=$Email;

        header("location: Admin/admin_page.php");
    }    
    else
    {
        echo "<script> alert ('something wrong try again');</script>";
    }
  
}
?>