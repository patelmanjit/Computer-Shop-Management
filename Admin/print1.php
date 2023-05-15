<?php
    require('fpdf.php');



    
	ob_start();	
	include ('config.php');

	//$id = $_GET['id'];
	
	session_start();
    //$id=$_SESSION["pid"];
	
	$sql ="SELECT * FROM orders ";
	$re = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$name = $row['name'];
		$number = $row['number'];
		$email = $row['email'];
		$method = $row['method'];
		$flat = $row['flat'];
		$street = $row['street'];
		$city = $row['city'];
		$state = $row['state'];
		$country = $row['country'];
		$pin_code = $row['pin_code'];
		$total_products = $row['total_products'];
		$quantity = $row['quantity'];
		$total_price = $row['total_price'];	
		
	
	}
	
								
	?>




<?php
    //require('fpdf.php');



    
	ob_start();	
	include ('config.php');

	//$id = $_GET['order_Id'];
	
	//session_start();
    //$id=$_SESSION["pid"];
	
	$sql ="SELECT * FROM cart ";
	$re = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($re))
	{
		//$id = $row['id'];
		$quantity = $row['quantity'];
		$price = $row['price'];
	
	
	}
	
	?>





<?php
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,10,'COMPUTER SHOP',1,1,'C');

    $pdf->Cell(70,8,'',0,1);

    $pdf->SetFont('Arial','',13);
    $pdf->Cell(70,8,'COMPUTER SHOP',0,1);
    $pdf->Cell(70,8,'Near Townhall',0,1);
    $pdf->Cell(70,8,'A.V.Road,Anand',0,1);
    $pdf->Cell(70,8,'Gujarat , India',0,1);
    $pdf->Cell(70,8,'(+91) 8490873636',0,1);

	$pdf->Image('IMG.png',130,17,70,70,"PNG","");


	$pdf->Cell(70,8,'',0,1);

	$pdf->SetFont('Arial','',13);
	$pdf->Cell(70,8,'Name: '.$name,0,1);


	$pdf->SetFont('Arial','',13);
	$pdf->Cell(70,8,'Contact: '.$number,0,1);

	$pdf->SetFont('Arial','',13);
	$pdf->Cell(70,8,'Address: '.$flat.','.' '.$street.',',0,1);
	$pdf->Cell(70,8,'               '.$city.','.' '.$state.','.' '.$country.',',0,1);
	$pdf->Cell(70,8,'               '.'Pin:'.$pin_code.'.',0,1);


	$pdf->Cell(50,8,'',0,'C');
    $pdf->Cell(50,8,'',0,'C');
    //$pdf->SetMargin('')
    
	$pdf->SetFont('Arial','B',12);

    $pdf->Cell(38,8,'Invoice No',1,0,'C');
    $pdf->Cell(38,8,'Product Name',1,0,'C');
	$pdf->Cell(38,8,'Method',1,0,'C');
    $pdf->Cell(38,8,'Quantity',1,0,'C');
    $pdf->Cell(38,8,'Total',1,1,'C');

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(38,8,$id,1,0,'C');
	$pdf->Cell(38,8,$total_products,1,0,'C');
	$pdf->Cell(38,8,$method,1,0,'C');
	$pdf->Cell(38,8,$quantity,1,0,'C');
	$pdf->Cell(38,8,$total_price,1,1,'C');


	$pdf->Cell(70,8,'',0,1);
    //$pdf->Cell(70,8,'',0,1);
    //$pdf->Cell(70,8,'',0,1);


    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(38,8,'Total',1,0,'C');
    $pdf->Cell(38,8,'Rs.  '.$total_price,1,1,'R');

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(38,8,'Amount Paid',1,0,'C');
    $pdf->Cell(38,8,'Rs.  0.00',1,1,'R');

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(38,8,'Payment Due',1,0,'C');
    $pdf->Cell(38,8,'Rs.  '.$total_price,1,0,'R');


	
	$pdf->Cell(70,8,'',0,1);
    $pdf->Cell(70,8,'',0,1);
    $pdf->Cell(70,8,'',0,1);

    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,8,'Contact Us',1,1,'C');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,8,'Email: computershop@gamil.com  ||  Web:- www.Computershop.com  ||  Phone:-  +91 9345673425',0,1,'C');



    



    
    $pdf->Output();
?>


