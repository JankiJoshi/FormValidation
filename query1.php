
<!--
	Displaying all data of searched UserName from database
-->

<!--
	Back end for query
-->


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Part Data Add</title>
</head>

<body>
<?php

	//receive the value from the form
	//$data = $_POST["data"];

	//set the db connection
	//C:\xampp\htdocs\1800
	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$db = 'C:\\xampp\\htdocs\\Assign5.accdb';
	$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0; Data Source=$db");

	//if the user chose vendor table
	
	
		$vendorName = $_POST["vendorName"];
					
		//make a sql statement
		$sql = "SELECT * FROM vendors WHERE VendorName LIKE '%$vendorName%'";
		$rs = $conn->Execute($sql);
		
	?>	
		<table border="1">
	<tr>
		<th>Vendor Number</th>
		<th>Vendor Name</th>
		<th>Address</th>
		<th>City</th>
		<th>Province</th>
		<th>Postal Code</th>
		<th>Country</th>
		<th>Phone</th>
		<th>FAX</th>
	</tr>
<?php
	//until recordset is end of the file, show the data
	while (!$rs->EOF):
?>
	<tr>
		<td align = "center"><?= $rs->Fields['vendorNo']->Value ?></td>
		<td align = "center"><?= $rs->Fields['vendorName']->Value ?></td>
		<td align = "center"><?= $rs->Fields['address1']->Value ?></td>
		<td align = "center"><?= $rs->Fields['city']->Value ?></td>
		<td align = "center"><?= $rs->Fields['province']->Value ?></td>
		<td align = "center"><?= $rs->Fields['postCode']->Value ?></td>
		<td align = "center"><?= $rs->Fields['country']->Value ?></td>
		<td align = "center"><?= $rs->Fields['phone']->Value ?></td>
		<td align = "center"><?= $rs->Fields['FAX']->Value ?></td>
	</tr>
		<?php 
			$rs->MoveNext() 
		?>
		<?php 
		endwhile 
		?>
</table>
		
	</body>
	</html>