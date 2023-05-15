<?php
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Contact = $_POST['Contact'];
   
	// Database connection
	$conn = new mysqli('localhost','root','','csdb');
	if($conn->connect_error){
		echo "$conn-> No connection successfully";
	die("Connection Failed : ". $conn->connect_error);
	
	} else {
		$stmt = $conn->prepare("insert into registers(Firstname, Lastname, Email, Password, Contact, Address) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param( "ssssss",$Firstname, $Lastname, $Email, $Password, $Contact, $Address);
		$value = $stmt->execute();
		echo "Registration successfully";
		
		if (mysqli_stmt_execute($stmt))
        {
            header("location: head.php");
        }
        else{
            echo "Something went wrong...try again!";
        }

		$stmt->close();
		$conn->close();
	}
?>
