function validate()
    {
      var flag=true;
      var x=document.getElementById("fidreg").value;
      var y=document.getElementById("fullnamereg").value;
      var z=document.getElementById("emailreg").value;
      var a=document.getElementById("phonereg").value;
      var pass=document.getElementById("password_1reg").value;
      var confirmpass=document.getElementById("password_2reg").value;
      if(x.length==0){
      document.getElementById("error1").innerHTML="This Field cannot be Empty";
      flag=false;
      }
      else if(x.length!=12)
        {
          document.getElementById("error1").innerHTML="FacultyId should be of length 12 characters";
          flag=false;
        }
    else {
        document.getElementById("error1").innerHTML="";
        flag=true;
    }
       if(y.length==0)
      {
        document.getElementById("error2").innerHTML="This Field cannot be Empty";
        flag=false;
      }
      else
      {
        document.getElementById("error2").innerHTML="";
        flag=true;
      }
      if(z.length==0)
      {
        document.getElementById("error3").innerHTML="This Field cannot be Empty";
        flag=false;
      }
      else if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(z)))
      {
        document.getElementById("error3").innerHTML="Invalid Email Adress";
        flag=false;
      }
      else{
        document.getElementById("error3").innerHTML="";
        flag=true;
      }


     if(a.length=0)
      {
        document.getElementById("error4").innerHTML="This field cannot be Empty";
      }
    else if(!(a.match(/^\d{10}$/)))
    {
        document.getElementById("error4").innerHTML="Invalid Phone Number";
        flag=false;
    }
    else
    {
        document.getElementById("error4").innerHTML="";
        flag=true;
    }
    
    if(pass.length==0)
    {
      document.getElementById("error5").innerHTML="This field cannot be Empty";
      flag=false;
    }
    else if(!(pass.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)))
    {
    document.getElementById("error5").innerHTML="Password should contain atleast one small,one capital,one numeric and one special character";
    flag=false;
    }

    else if(pass.length<8 || pass.length>15)
    {
      document.getElementById("error5").innerHTML="Password length should be 8-15 characters";
      flag=false;
    }
    else
    {
      document.getElementById("error5").innerHTML="";
      flag=true; 
    }


    if(confirmpass.length==0)
    {
      document.getElementById("error6").innerHTML="This field cannot be Empty";
      flag=false;
    }
    else if(confirmpass!=pass)
    {
      document.getElementById("error6").innerHTML="Passwords Not Matching";
      flag=false; 
    }
    else
    {
      document.getElementById("error6").innerHTML="";
      flag=true;
    }
        return flag;
    }