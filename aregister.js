var placehlder;
function hide(input_id,lbl){
	/*
		var e1=document.getElementById(input_id);
		var e2=document.getElementById(lbl);
		placehlder=e1.getAttribute('placeholder');
	
	
	e2.style.visibility="visible";
	if (e2.style.fontSize == "25px"){

		return;
	}

    var sz = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (sz == 25) {
            clearInterval(id);
        } else {
            sz+=6;
            e2.style.fontSize = sz + 'px';
        }
    }
*/
}
function show(input_id,lbl){
	/*
  	var e1=window.document.getElementById(input_id);
  	var e2=document.getElementById(lbl);
    //document.write(placehlder);
  	if (e1.value.length ==0) {
	e2.style.visibility="hidden";
	}
	else{
		e1.style.borderColor="blue";
	}
	*/
}

function displayError(id,msg)
{
  console.log(id);
  console.log(msg);

  label=document.getElementById(id);
  label.style.display="block";
  label.innerText=msg;
  
}
function removeError(id)
{
  label=document.getElementById(id);
  label.style.display="none";
}

function FormValidate()                                    
{ 
	console.log("FormValidate");
    var fn = document.forms["RegForm"]["fn"];               
    var mn = document.forms["RegForm"]["mn"];               
    var ln = document.forms["RegForm"]["ln"];               
    var cllg_org = document.forms["RegForm"]["cllg_org"];               
    var email = document.forms["RegForm"]["email"];    
    var phone = document.forms["RegForm"]["phone"];  
    
    var password = document.forms["RegForm"]["password"];  
    var confirm_password =  document.forms["RegForm"]["confirm_password"];  
    var address = document.forms["RegForm"]["address"];  
      
    var user_type =  document.forms["RegForm"]["user_type"];
    var gender =  document.forms["RegForm"]["gender"];
    
    var send_otp = document.forms["RegForm"]["send_otp"];
    console.log(send_otp);
    var otp =  document.forms["RegForm"]["otp"];

    var city =  document.forms["RegForm"]["city"];  
    var state =  document.forms["RegForm"]["state"];  
    
    var error = false;
    if (fn.value == "")                                  
    { 
       // window.alert("Please enter your name.");
        displayError('fn_error',"Please enter First Name."); 
        fn.focus(); 
        error= true; 
    }
    else
    {
      removeError('fn_error');
    }
    if (mn.value == "")                                  
    { 
       // window.alert("Please enter your name.");
        displayError('mn_error',"Please enter Middle Name."); 
        mn.focus(); 
        error= true; 
    }
    else
    {
      removeError('mn_error');
    }  

    if (ln.value == "")                                  
    { 
       // window.alert("Please enter your name.");
        displayError('ln_error',"Please enter Last Name."); 
        ln.focus(); 
        error= true; 
    }
    else
    {
      removeError('ln_error');
    } 

    if (cllg_org.value == "")                                  
    { 
        //window.alert("Please enter your name."); 
        displayError('cllg_org_error',"Please enter College/ Org Name.");
        cllg_org.focus(); 
        error= true;  
    } 
    else
    {
      removeError('cllg_org_error');
    }
    if (address.value == "")                               
    { 
        //window.alert("Please enter your address."); 
        displayError('address_error',"Please enter Address.");
        address.focus(); 
        error= true; 
    } 
    else
    {
      removeError('address_error');
    }
    
       
    if (email.value == "")                                   
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        email.focus(); 
        error= true; 
        //send_otp.setAttribute("disabled","disabled"); 
    } 
   
    else if (email.value.indexOf("@", 0) < 0)                 
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        email.focus(); 
        error= true; 
        //send_otp.setAttribute("disabled","disabled"); 
    } 
   
    else if (email.value.indexOf(".", 0) < 0)                 
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        email.focus(); 
        error= true; 
        //send_otp.setAttribute("disabled","disabled");
    } 
    else
    {
      removeError('email_error');
      //send_otp.removeAttribute("disabled");
    }
   
    if (otp.value == "")                                  
    { 
       // window.alert("Please enter your name.");
        displayError('otp_error',"Please enter OTP."); 
        otp.focus(); 
        error= true; 
    }
    else
    {
      removeError('otp_error');
    }

    if (phone.value == "")                           
    { 
        //window.alert("Please enter your telephone number."); 
        displayError('phone_error',"Please enter your Phone number.");
        phone.focus(); 
        error= true; 
    } 
    else if (phone.value.length!=10)                           
    { 
        //window.alert("Please enter your telephone number."); 
        displayError('phone_error',"Please enter a valid Phone number.");
        phone.focus(); 
        error= true; 
    }
    else
    {
      removeError('phone_error');
    }
    
   
    if (password.value == "")                        
    { 
        //window.alert("Please enter your password");
        displayError('password_error',"Please enter your password."); 
        password.focus(); 
        error= true;  
    }
    else
    {
      removeError('password_error');
    }
    
    if (confirm_password.value == "")                        
    { 
        //window.alert("Please enter your password");
        displayError('confirm_password_error',"Please enter your password."); 
        confirm_password.focus(); 
        error= true; 
    }
    else
    {
      removeError('confirm_password_error');
    }
    
   
    if (password.value!=confirm_password.value) 
    {
      displayError('passwords_error',"Passwords don't match."); 
      confirm_password.focus(); 
      error= true; 
    }
    else
    {
      removeError('passwords_error');
    }
   
    if (state.selectedIndex < 1)                  
    { 
        //alert("Please enter your course."); 
        displayError('state_error',"Please select State."); 
        state.focus(); 
        error= true; 
    } 
    else
    {
      removeError('state_error');
    }
    if (city.selectedIndex < 1)                  
    { 
        //alert("Please enter your course."); 
        displayError('city_error',"Please select City."); 
        city.focus(); 
        error= true; 
    }
    else
    {
      removeError('city_error');
    } 

    if (user_type.value == "")                        
    { 
        //window.alert("Please enter your password");
        displayError('user_type_error',"Please select User Type."); 
       
        error= true;  
    }
    else
    {
      removeError('user_type_error');
    }
    if (gender.value == "")                        
    { 
        //window.alert("Please enter your password");
        displayError('gender_error',"Please select Gender."); 
        
        error= true;  
    }
    else
    {
      removeError('gender_error');
    }

   
    if (error) 
    {
      return false;
    }
    return true; 
}



function chkaMail(obj) {
        str=obj.value;
        if (window.XMLHttpRequest) 
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else 
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("email_error").style.display="block";

                document.getElementById("email_error").innerHTML = this.responseText;
                if (this.responseText=="Email available") 
                {
                    document.getElementById("send_otp").removeAttribute("disabled");
                }
                else
                {
                    document.getElementById("send_otp").setAttribute("disabled","disabled");
                }
            }
        };
        xmlhttp.open("GET","chkaMail.php?q="+str,true);
        xmlhttp.send();
    
}

function sendOTP(obj) {
        
        if (window.XMLHttpRequest) 
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else 
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("send_otp_error").style.display="block";
                document.getElementById("send_otp_error").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","mailS.php?q=",true);
        xmlhttp.send();
    return false;
    
}