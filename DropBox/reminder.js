function checkForm(form)
  {

		if (form.email.value == "" )
		{ alert("Error: email cannot be blank!");
      form.logon.focus();
      return false;
		}
	
		
		
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value))
		{
		
		}
		else {
		alert("You have entered an invalid email address!")  ;
    form.email.focus();
		return false ;
		}
		
		alert("Checking in database " );
 
		return true;
		
		}