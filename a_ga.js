function validateForm()
{
    var returnval=true;
    
     var Name = document.forms["myform"]["username"].value;             //start checking of of name
    // var Name = document.getElementById("fname");
    if(Name.length<5)
    {
     //seterror("name","Length of name is too short");
    alert("name must be contains more than 5 characters");
    returnval=false;
    }        
    
    var pass = document.forms["myform"]["password"].value;
    if(pass.length<3)
    {
        alert("password must be contains more than 3 charcters");
        returnval=false;
    }

    var confirm = document.forms["myform"]["c_password"].value;
    if(pass!=confirm)
    {
        alert("Both password and confirm password must be matched");
        returnval=false;
    }
    
    return returnval;
}