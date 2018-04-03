function clearText(thefield){
if (thefield.defaultValue==thefield.value)
thefield.value = ""
}

<!-- Begin
function verifycontact() {
var themessage = "You are required to complete the following fields: \n";
var break_out = -1

if (document.REGcontact.realname.value=="") {
	themessage = themessage + " -  Name \n";
	}
if (document.REGcontact.address.value=="") {
	themessage = themessage + " -  Address \n";
	}
if (document.REGcontact.city.value=="") {
	themessage = themessage + " -  City \n";
	}
if (document.REGcontact.zip.value=="") {
	themessage = themessage + " -  Zip Code \n";
	}
if (document.REGcontact.phone.value=="") {
	themessage = themessage + " -  Phone \n";
	}	
if (document.REGcontact.email.value=="") {
	themessage = themessage + " -  E-Mail \n";
	}
if (document.REGcontact.comments.value=="") {
	themessage = themessage + " -  Comments \n";
	}


	
//alert if fields are empty and cancel form submit
if (themessage == "You are required to complete the following fields: \n") {
document.REGcontact.submit();
}
else {
alert(themessage);
return false;
   }
}
//  End -->
