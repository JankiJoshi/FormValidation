
<!--
		Janki Joshi
		Assignment 5
		Date: /03/2016
-->

 <!--
	HTML tag, the starting of the program
 -->


<html>
<head>
	<title>Parts Information</title>
</head>
<body>

<!-- Connecting parts table and inserting data into it-->
<?php	

  	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$db = 'C:\\xampp\\htdocs\\Assign5.accdb';
	$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0; Data Source=$db");
	 	
	//make a sql statement		
	
	if(empty($_POST))
	{
		print "Oh no. Please fill the parts form completely.";
	}
	else
	{	
		$vNumber = $_POST["vendorNo"];
		$Description = $_POST["description"];			
		$onhand = $_POST["onHand"];
		$onorder = $_POST["onOrder"];			
		$Cost = $_POST["cost"];
		$listprice=$_POST["listPrice"];
		$message="";
		
		if(isset($_POST['vendorNo']))
			{
				if($vNumber=="Default")
				{
					$message = $message ." You have not selected your Vendor Name"."<br/>";
				}	
			}
			
		if(empty($Description))
			{
				$message = $message . "Description Name should not be empty" ."<br/>" ;	
			}
		else
			{					
			    if (strlen($Description)<5)
				{
					$message = $message . "Description Name should be more than 5 characters"."<br/>";
				}				
			}
			
		if (empty($onhand))
			{				
				$message = $message . "onhand Number should be more than 3 characters" ."<br/>" ;
			}	
		else
			{
				if(!is_numeric($onhand))
				{
				$message= $message . "onhand Number should be in numbers" ."<br/>" ;	
				}
			}
			
		if (empty($onorder))
			{				
				$message = $message . "onorder Number should be more than 3 characters" ."<br/>" ;
			}	
		else
			{
				if(!is_numeric($onorder))
				{
				$message= $message . "onorder Number should be in numbers" ."<br/>" ;	
				}
			}

		if (empty($Cost))
			{				
				$message = $message . "Cost Number should be more than 3 characters" ."<br/>" ;
			}	
		else
			{
				if(!is_numeric($Cost))
				{
				$message= $message . "Cost Number should be in numbers" ."<br/>" ;	
				}
			}
		
		if (empty($listprice))
			{				
				$message = $message . "listprice Number should be more than 3 characters" ."<br/>" ;
			}	
		else
			{
				if(!is_numeric($listprice))
				{
				$message= $message . "listprice Number should be in numbers" ."<br/>" ;	
				}
				if($listprice<$Cost)
				{
					$message= $message . "listprice should be not less than Cost" ."<br/>" ;
				}
			}
			
		
		if($message!="")
		{
			print $message;
		}
		else
		{
				$listprice = trim($listprice);
				$Cost = trim($Cost);
				$onorder = trim($onorder);
				$onhand = trim($onhand);
				$Description = trim($Description);
				
				$sql = "INSERT INTO parts (VendorNo,Description,OnHand,OnOrder,Cost,ListPrice) VALUES ('$vNumber','$Description','$onhand','$onorder','$Cost','$listprice')";
				
				$rs = $conn->Execute($sql);				
				
				print '<h2>Your Entered Information</h2>';
				print "Vendor Name : " . $vNumber . '<br/>';
				print "Description : " . $Description . '<br/>';
				print "Onhand : " . $onhand. '<br/>';
				print "On Order : " . $onorder . '<br/>';
				print "Cost: $" . $Cost . '<br/>';
				print "List Price : $" . $listprice . '<br/>';				
		}
		
		
		
			
	}
?>	
	

</body>
</html>