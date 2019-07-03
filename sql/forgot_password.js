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
   
                  
    var email = document.forms["LogForm"]["email"];      
    
    var error = false;
    
    
       
    if (email.value == "")                                   
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        //document.getElementById("btn").setAttribute("disabled","disabled");
        email.focus(); 
        error= true;  
    } 
   /*
    else if (email.value.indexOf("@", 0) < 0)                 
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        //document.getElementById("btn").setAttribute("disabled","disabled");
        email.focus(); 
        error= true;  
    } 
   
    else if (email.value.indexOf(".", 0) < 0)                 
    { 
        //window.alert("Please enter a valid e-mail address."); 
        displayError('email_error',"Please enter a valid e-mail address.");
        //document.getElementById("btn").setAttribute("disabled","disabled"); 
        email.focus();
        error= true; 
    } 
    */
    else
    {
      removeError('email_error');
      //document.getElementById("btn").removeAttribute("disabled");
    }
  
   
    if (error) 
    {
      //document.getElementById("btn").setAttribute("disabled","disabled");
      return false;
    }
    return true; 
}
