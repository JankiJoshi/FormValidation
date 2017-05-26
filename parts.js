
/*
		Janki Joshi
		Assignment 5
		Date: /03/2016
*/

 /*
	HTML tag, the starting of the program
 */


function validateForm()
		{			
			var vNumber = document.myForm.vendorNo;
			var Description = document.myForm.description.value			
			var onhand = document.myForm.onHand.value;
			var onorder = document.myForm.onOrder.value;			
			var Cost = document.myForm.cost.value;
			var listprice=document.myForm.listPrice.value;					
			var message="";
			
		// checks if a vendor name is selected
		if(vNumber.value=="Default")
			{
				if(message=="")
				{
					document.myForm.vendorNo.focus();
				}
				message+="Please select Vendor Name.\n";
			}	
			
		// validates Description
		if(Description==""||Description==null)
			{
				if(message=="")
				{
					document.myForm.description.focus();
					document.myForm.description.select();
				}
				message+="Please enter your City.\n";
			}
		if(Description.length<=5)
			{
				if(message=="")
				{
					document.myForm.description.focus();
					document.myForm.description.select();
				}
				message+="There must be minimum 5 characters in Decsription.\n";
			}
			else
			{				
				if(isNaN(Description))
				{
				Description=Description.trim();
				Description=Description.toLowerCase();
				Description=Description.charAt(0).toUpperCase()+city1.slice(1);
				description.value=Description;
				}				
				else
				{
					if(message=="")
					{
						document.myForm.description.focus();
						document.myForm.description.select();
					}					
					message+="Decsription should not contain numbers\n";
				}				
			}
			
		// validates on hand items
		if(onhand==""||onhand==null)
			{
				if(message=="")
					{
						document.myForm.onHand.focus();
						document.myForm.onHand.select();
						
					}
				message+="Please enter your on hand quantity.\n";
			}
			else
			{
				if(isNaN(onhand))
				{
					if(message=="")
					{
						document.myForm.onHand.focus();
						document.myForm.onHand.select();
					}					
					message+="on hand quantity  must be in numbers.\n";
				}					
			}
		
		// validates on order items
		if(onorder==""||onorder==null)
			{
				if(message=="")
					{
						document.myForm.onOrder.focus();
						document.myForm.onOrder.select();
						
					}
				message+="Please enter your on order quantity.\n";
			}
			else
			{
				if(isNaN(onorder))
				{
					if(message=="")
					{
						document.myForm.onOrder.focus();
						document.myForm.onOrder.select();
					}					
					message+="on order quantity  must be in numbers.\n";
				}					
			}
			
		// validates cost 		
		if(Cost==""||Cost==null)
			{
				if(message=="")
					{
						document.myForm.cost.focus();
						document.myForm.cost.select();
						
					}
				message+="Please enter your cost.\n";
			}
			else
			{
				if(isNaN(Cost))
				{
					if(message=="")
					{
						document.myForm.cost.focus();
						document.myForm.cost.select();
					}					
					message+="cost  must be in numbers.\n";
				}					
			}
			
		// validates listprice
		if(listprice==""||listprice==null)
			{
				if(message=="")
					{
						document.myForm.listPrice.focus();
						document.myForm.listPrice.select();
						
					}
				message+="Please enter your list price.\n";
			}
		else
			{
				if(isNaN(listprice))
				{
					if(message=="")
					{
						document.myForm.listPrice.focus();
						document.myForm.listPrice.select();
					}					
					message+="List price  must be in numbers.\n";
				}											
			}	
			
			// listprice must be less than cost
			if(Cost>listprice)
					{					
					message += "List price must be more than Cost price.\n";
					}					
			if(message!="")
				{
					alert(message);
					return false;
				}
		}





