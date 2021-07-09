<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function validateNumber()
        {
            var x=document.getElementById("inp1").value;
            var y=document.getElementById("inp2").value;
            if(x.length==0 || y.length==0){
            document.getElementById("error1").innerHTML="This field cannot be empty";
            return false;}
            else if(x.length<2 || x.length>15){
                document.getElementById("error1").innerHTML="First Name should be of length 3-15 characters";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form>
        <label>FirstName</label>
        <input type="text" id="inp1" onkeyup="validateNumber()" onclick="validateNumber()" onchange="validateNumber()"><br>
        <p  style="color:red" id="error1"></p><br>
        <label>Password</label>
        <input type="text" id="inp2" onkeyup="validateNumber()" onclick="validateNumber()" onchange="validateNumber()"><br>
        <p style="color:red" id="error2"></p>
    </form>
</body>
</html>