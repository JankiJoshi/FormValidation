
<!--
		Janki Joshi
		Assignment 5
		Date: /03/2016
-->

 <!--
	HTML tag, the starting of the program
	Front end for online store
	
 --> 

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Janki-Assignment5</title>
	<script src="parts.js" type="text/javascript"></script>
</head>

<body>
	<form name="myForm"  method="Post" Onsubmit="return validateForm()" action="parts.php">
	
	<fieldset>
		<legend><h2>Add Parts Information</h2></legend>
		<br/><br/>
		

		<label>Vendor No. :</label>
		<!-- php that fetches vendor numbers into select menu -->
<?php	
  	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$db = 'C:\\xampp\\htdocs\\Assign5.accdb';
	$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0; Data Source=$db");	
			
		$sql = "SELECT VendorNo, VendorName FROM Vendors ORDER BY VendorName"; 
		$rs = $conn->Execute($sql);	
		$connect="";
		$connect .= '<option value="Default"><--Select--></option>';
		while(!$rs->EOF)
		{			
			$connect .= '<option value="'.$rs->Fields['VendorNo']->Value.'">'.$rs->Fields['vendorName']->Value.'</option>';
			$rs->MoveNext();			
		}	
?>	
	
	<select name="vendorNo" id="vendorNo">		
		<?php echo $connect; ?>	
	</select>		
		<br/><br/>

		<label>Description : </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="description" id="description">&nbsp;
		<span style="color:red;">*</span>
		<br/><br/>

		<label>OnHand : </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="onHand" id="onHand">&nbsp;
		<span style="color:red;">*</span>
		<br/><br/>
		
		<label>OnOrder : </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="onOrder" id="onOrder">&nbsp;
		<span style="color:red;">*</span>
		<br/><br/>
		
		<label>Cost : </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="cost" id="cost">&nbsp;
		<span style="color:red;">*</span>
		<br/><br/>
		
		<label>ListPrice : </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="listPrice" id="listPrice">&nbsp;
		<span style="color:red;">*</span>
		<br/><br/>
		<br/><br/>	
		
		<input type="submit" value="Submit">		
		<br/><br/>
		<br/><br/>
		
</form>

</body>
</html>


