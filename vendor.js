

/*
		Janki Joshi
		Assignment 5
		Date: 14/04/2016
*/

 /*
	HTML tag, the starting of the program
	Front end for vendor details
 */

function validateForm()
		{
			var vendorNumber = document.myForm.vendorNo.value;
			var vName = document.myForm.vendorName.value;
			var city1 = document.myForm.city.value;
			var cellNumber = document.myForm.phNumber.value;	
			var fax = document.myForm.faxNumber.value;
			var Postal = document.myForm.postal.value;			
			var streetno1 = document.myForm.streetNumber1.value;
			var streetname1=document.myForm.streetName1.value;
			
			var Province=document.myForm.province;
			var Country=document.myForm.country;
						
			var message="";
			
	
	// validates vendor Number		
	if(vendorNumber==""||vendorNumber==null)
			{
				if(message=="")
					{
						document.myForm.vendorNo.focus();
						document.myForm.vendorNo.select();
						
					}
				message+="Please enter your Vendor Number.\n";
			}
			else
			{
				if(isNaN(vendorNumber))
				{
					if(message=="")
					{
						document.myForm.vendorNo.focus();
						document.myForm.vendorNo.select();
					}					
					message+="Vendor Number must be in numbers.\n";
				}					
			}
	// validates vendor's name		
		
		if (vName == ""||vName == null)
			{
				if(message=="")
					{
						document.myForm.vendorName.focus();
						document.myForm.vendorName.select();
					}
				message+="Please enter your vendor Name\n";
			}
			else
			{
				if(isNaN(vName))
				{
					vName=vName.trim();
					vName=vName.toLowerCase();
					vName=vName.charAt(0).toUpperCase()+vName.slice(1);
					vendorName.value=vName;					
				}
				else
				{
					if(message=="")
					{
						document.myForm.vendorName.focus();
						document.myForm.vendorName.select();
					}					
					message+="vendor Name should not contain numbers\n";
				}
				
			}
	// validates street no			

			if(streetno1==""||streetno1==null)
			{
				if(message=="")
					{
						document.myForm.streetNumber1.focus();
						document.myForm.streetNumber1.select();
						
					}
				message+="Please enter your Street Number.\n";
			}
			else
			{
				if(isNaN(streetno1))
				{
					if(message=="")
					{
						document.myForm.streetNumber1.focus();
						document.myForm.streetNumber1.select();
					}					
					message+="Street Number must be in numbers.\n";
				}					
			}

		// validates street name
		if(streetname1==""||streetname1==null)
		{
			if(message=="")
			{
				document.myForm.streetName1.focus();
				document.myForm.streetName1.select();
			}
				message+="Please enter your street Name.\n";
		}
		else
		{
			if(isNaN(streetname1))
				{
					streetname1=streetname1.trim();
					streetname1=streetname1.toLowerCase();
					streetname1=streetname1.charAt(0).toUpperCase()+streetname1.slice(1);
					streetName1.value=streetname1;
				}				
				else
				{
					if(message=="")
					{
						document.myForm.streetname1.focus();
						document.myForm.streetname1.select();
					}					
					message+="Street Name should not contain numbers\n";
				}			
		}
	
		
		// validates city name		
		if(city1==""||city1==null)
			{
				if(message=="")
				{
					document.myForm.city.focus();
					document.myForm.city.select();
				}
				message+="Please enter your City.\n";
			}
		if(city1.length<=3)
			{
				if(message=="")
				{
					document.myForm.city.focus();
					document.myForm.city.select();
				}
				message+="There must be minimum 3 characters in City.\n";
			}
			else
			{				
				if(isNaN(city1))
				{
				city1=city1.trim();
				city1=city1.toLowerCase();
				city1=city1.charAt(0).toUpperCase()+city1.slice(1);
				city.value=city1;
				}				
				else
				{
					if(message=="")
					{
						document.myForm.city.focus();
						document.myForm.city.select();
					}					
					message+="City should not contain numbers\n";
				}				
			}
		
		// checks if the country is selected
		if(Country.value=="Default")
			{
				if(message=="")
				{
					document.myForm.Country.focus();
				}
				message+="Please select your Country.\n";
			}				
		
		// checks if the province is selected
		if(Province.value=="Default")
			{
				if(message=="")
				{
					document.myForm.province.focus();
				}
				message+="Please select your Province.\n";
			}				
		
		// validates postal code
		if(Postal=="" || Postal==null)
			{
				if(message=="")
				{
					document.myForm.postal.focus();
					document.myForm.postal.select();
				}
				message+="Please enter your Postal Code.\n";
			}
		else
			{
				if(Postal.length!=6)
				{
					if(message=="")
					{
					document.myForm.postal.focus();
					document.myForm.postal.select();
					}
					message+="There must be minimum 6 characters in Postal Code without Spaces.\n";
				}
				else
				{
					var checkpostal=/^[A-Y][0-9][A-Y][0-9][A-Y][0-9]$/i;
						
					Postal=Postal.trim();
					Postal=Postal.toUpperCase();
					
					if(Postal.match(checkpostal))
					{
						postal.value=Postal;
					}
					else
					{
						if(message=="")
						{
						document.myForm.postal.focus();
						document.myForm.postal.select();
						}
						message+="Please write the Postal Code in correct Format \n";
					}
				}
			}		

		// validates cellnumber
		var checknumber=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
			if(cellNumber==""||cellNumber==null)
			{
			if(message=="")
				{
					document.myForm.phNumber.focus();
				
				}
			message+="Please enter your Phone number\n";	
			}
			else
			{
				cellNumber=cellNumber.trim();
				if(cellNumber.match(checknumber))
				{
						phNumber.value=cellNumber;
				}
				else
				{
					if(message=="")
					{
							document.myForm.phNumber.focus();
							document.myForm.phNumber.select();
					}
				message+="Please enter your Phone number in a correct format.\n";
				}
			}
			
		// validates fax number
		var checknumber=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
			if(fax==""||fax==null)
			{
			if(message=="")
				{
					document.myForm.faxNumber.focus();
				
				}
			message+="Please enter your Fax number\n";	
			}
			else
			{
				fax=fax.trim();
				if(fax.match(checknumber))
				{
						faxNumber.value=fax;
				}
				else
				{
					if(message=="")
					{
							document.myForm.faxNumber.focus();
							document.myForm.faxNumber.select();
					}
				message+="Please enter your Fax number in a correct format.\n";
				}
			}
			
			if(message!="")
				{
					alert(message);
					return false;
				}
		}





