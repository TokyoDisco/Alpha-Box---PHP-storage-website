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
		
		
		
	
	
	
    if(form.logon.value == "") {
      alert("Error: Username cannot be blank!");
      form.logon.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.logon.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.logon.focus();
      return false;
    }

    if(form.pass1.value != "" && form.pass1.value == form.pass2.value) {
      if(form.pass1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass1.focus();
        return false;
      }
      if(form.pass1.value == form.logon.value) {
        alert("Error: Password must be different from Username!");
        form.pass1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pass1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pass1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pass1.focus();
      return false;
    }

    alert("Checking in database " );
            window.location.href = "logonA.html" ;
		return true;
  }
