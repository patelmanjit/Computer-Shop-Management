<?php 

$conn = new mysqli('localhost','root','','csdb');
	if($conn->connect_error){
		echo "$conn-> No connection successfully";
	die("Connection Failed : ". $conn->connect_error);}

    session_start();

    if(isset($_POST['Submit']))
    {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];

        $sql="SELECT * from registers where Email = '$Email'";

        $result=mysqli_query($conn,$sql);

        $num=mysqli_fetch_array($result);

        if($num>0)
        {
            mysqli_query($conn,"UPDATE registers set Password='$Password' where Email='$Email'");

            $_SESSION['Email']=$Email;
            header('location: login.html');
        }
        else
        {
            echo "<script> alert ('something wrong try again');</script>";
        }
    }
?>