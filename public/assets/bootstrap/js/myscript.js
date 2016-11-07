
function emptyvalidation(entered,alertbox)
{
	with (entered)
	{
		if (value==null || value=="")
		{	
			alert(alertbox);
			return false;
		}
		else
		{
			return true;
		}
	}
}
function validname(entered,alertbox)
	{
		flag=0;
		with(entered)
		{
		for (i=0;i<value.length;i++)
		{
			if((value.charCodeAt(i)>=65 && value.charCodeAt(i)<=90) || (value.charCodeAt(i)>=97 && value.charCodeAt(i)<=122 || value.charCodeAt(i)==32))
			{
				flag=1;
			}
			else
			{
				flag=0;
				break;
			}
		}
		
		if(flag==1)
		{
			return true;
		}
		else
		{
			alert(alertbox);
			return false;
		}
		}
	}
function formvalidation(thisform)
{
	with (thisform)
	{
		if(emptyvalidation(client_name,"Please type in your Name !")==false || validname(client_name,"Error ! Please enter valid name !")==false)
		{
			client_name.focus();
			client_name.select();
			return false;
		}
		else if(emptyvalidation(optionsGenderRadio,"Please select gender !")==false)
		{
			return false;
		}
		else if(emptyvalidation(phone,"Please enter your phone!")==false)
		{
			phone.focus();
			phone.select();
			return false;
		}
		else if(emptyvalidation(address,"Please enter your address!")==false)
		{
			address.focus();
			address.select();
			return false;
		}
		else if(emptyvalidation(dob,"Please enter your Date of Birth!")==false)
		{
			dob.focus();
			return false;
		}
		else
		{
			document.clientform.submit();
		}		
	
	}
}