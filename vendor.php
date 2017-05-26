

<!--
		Janki Joshi
		Assignment 5
		Date: 14/04/2016
-->

 <!--
	HTML tag, the starting of the program
-->

<html>
<head>
</head>
<body>

<!--
		php file to validate each entry
		connecting vendors table and inserting data
 -->
<?php
  	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$db = 'C:\\xampp\\htdocs\\Assign5.accdb';
	$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0; Data Source=$db");

	//sql statement

	if(empty($_POST))
	{
		print "Oh no. Please fill the vendor form completely.";
	}
	else
	{
	$vendorNumber = $_POST["vendorNo"];
	$vName=$_POST["vendorName"];
	$city1 = $_POST["city"];
	$cellNumber = $_POST["phNumber"];
	$Postal = $_POST["postal"];
	$fax = $_POST["faxNumber"];
	$streetno1 = $_POST["streetNumber1"];
	$sName1 = $_POST["streetName1"];
	$Province = $_POST["province"];
	$Country = $_POST["country"];

	$message="";

		if (empty($vendorNumber))
			{
				$message = $message . "Vendor Number should be more than 3 characters" ."<br/>" ;
			}
			else
			{
				if(!is_numeric($vendorNumber))
				{
				$message= $message . "Vendor Number should be in numbers" ."<br/>" ;
				}
			}

		if(empty($vName))
			{
				$message = $message . "Vendor Name should not be empty" ."<br/>" ;
			}
		else
			{

			    if (strlen($vName)<3)
				{
					$message = $message . "Vendor Name should be more than 3 characters"."<br/>";
				}
			}

		if(empty($streetno1))
			{
				$message = $message . "Please enter your street number"."<br/>";
			}
		else
			{
				if(!is_numeric($streetno1))
				{
					$message = $message . "Street number should be in numbers"."<br/>";
				}
			}

		if(empty($sName1))
			{
				$message = $message . "Please enter your street name"."<br/>";
			}
		else
			{
				if (strlen($sName1)<3)
					{
						$message = $message . "Street Name should be more than 3 characters"."<br/>";
					}
			}

		if(empty($city1))
			{
				$message = $message . "City should not be empty"."<br/>";
			}
		else
			{
				if (strlen($city1)<=3)
				{
					$message = $message . "City should be more than 3 characters"."<br/>";
				}
			}

		if(empty($Postal))
			{
				$message = $message . "Please enter your postal"."<br/>";
			}
		else
			{
				if(!preg_match("/^[A-Za-z][0-9][A-Za-z][0-9][A-Za-z][0-9]$/",$Postal))
				{
				   $message .= "Please enter your postal properly"."<br/>";
				}
			}

		if(isset($_POST['province']))
			{
				if($Province=="Default")
				{
					$message = $message ." You have not selected your Province"."<br/>";
				}
			}
		else
			{
				$message = $message ." You have not selected your Province"."<br/>";
			}

		if(isset($_POST['country']))
			{
				if($Country=="Default")
				{
					$message = $message ." You have not selected your Country"."<br/>";
				}
			}

		if(empty($cellNumber))
			{
				$message = $message . "Please enter your phone number"."<br/>";
			}
		else
			{
				if(!preg_match("/^[1-9]{3}[0-9]{3}[0-9]{4}$/",$cellNumber))
					{
						$message = $message . "Please enter your phone number properly"."<br/>";
					}
			}

		if(empty($fax))
			{
				$message = $message . "Please enter your fax number"."<br/>";
			}
		else
			{
			if(!preg_match("/^[1-9]{3}[0-9]{3}[0-9]{4}$/",$fax))
				{
					$message = $message . "Please enter your fax number properly"."<br/>";
				}
			}
		if($message!="")
			{
				print $message;
			}
			else
			{
				$vendorNumber = trim($vendorNumber);
				$vName = trim($vName);
				$vName = strtolower($vName);
				$vName = ucwords($vName);
				$streetno1 = trim($streetno1);
				$sName1 = trim($sName1);
				$sName1 = strtolower($sName1);
				$sName1 = ucwords($sName1);
				$Postal = strtoupper($Postal);
				$city1 = trim($city1);
				$city1 = strtolower($city1);
				$city1 = ucwords($city1);
				$cellNumber = trim($cellNumber);
				$fax = trim($fax);

				$address1 = $streetno1.$sName1;

				// Insert query
				$sql = "INSERT INTO vendors (VendorNo,VendorName,Address1,City,Province,PostCode,Country,Phone,Fax) VALUES ('$vendorNumber','$vName','$address1','$city1','$Province','$Postal','$Country','$cellNumber','$fax')";

				$rs = $conn->Execute($sql);

				print '<h2>Your Entered Information</h2>';
				print "Vendor Number : " . $vendorNumber . '<br/>';
				print "Vendor Name : " . $vName . '<br/>';
				print "Address : " . $streetno1. ", " . $sName1 . '<br/>';
				print "City : " . $city1 . '<br/>';
				print "Province : " . $Province . '<br/>';
				print "Postal Number : " . $Postal . '<br/>';
				print "Country : " . $Country . '<br/>';
				print "Phone Number : " . $cellNumber . '<br/>';
				print "Fax Number : " . $fax . '<br/>';
				//$rs->Close();
				//$conn->Close();
			}
	}

?>

</body>
</html>