<!DOCTYPE html>
<html lang="en">
<?php include('connection.php') ?>
<head>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" href="emo.css">
     <title>ANIL NEERUKONDA INSTITUTE OF TECHNOLOGY AND SCIENCES</title>
  <style>
	* {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background: #F8F8FF;
    background-color:skyblue;
    font-size:90%;
  }
  
  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
  .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.8;
}
  </style>








  <script src="validation.js">
  </script>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand  fixed-top" style="font-size:90%">
        <div class="container " style="margin-left:0px">
            <a  href="index.php"><img src="images/img2.jpg" height="30" width="45"></a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                <li class="nav-item " ><a class="nav-link" href="aboutus.php"><span class="fa fa-info fa-lg"></span>About</a></li>
                <li class="nav-item" ><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
            </ul>
        </div>
    </nav>
  <img class="bg" src="images/back1.jpg" alt="ANITS">
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="registration.php" autocomplete="off">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>FacultyId</label>
  	  <input type="text" name="fidreg"  id="fidreg"  pattern="[a-zA-Z0-9]+" value="<?php echo $username; ?>" required onkeyup="validate()" onclick="validate()" onchange="validate()"><br>
      <p style="color:red" id="error1"></p>
  	</div>
    <div class="input-group">
  	  <label>FULL Name</label>
  	  <input type="text" name="fullnamereg"   id="fullnamereg" value="<?php echo $email; ?>" required onkeyup="validate()" onclick="validate()" onchange="validate()"><br>
      <p style="color:red" id="error2"></p>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email"  id="emailreg" name="emailreg" value="<?php echo $email; ?>" required onkeyup="validate()" onclick="validate()" onchange="validate()">
      <p style="color:red" id="error3"></p>
  	</div>
    <div class="input-group">
  	  <label>Phone</label>
  	  <input type="text"  name="phonereg" id="phonereg" value="<?php echo $phone?>"   required onkeyup="validate()" onclick="validate()" onchange="validate()">
      <p style="color:red" id="error4"></p>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1reg" id="password_1reg"  value="<?php echo $password_1?>" required onkeyup="validate()" onclick="validate()" onchange="validate()">
      <p style="color:red" id="error5"></p>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2reg"   id="password_2reg" required onkeyup="validate()" onclick="validate()" onchange="validate()">
      <p style="color:red" id="error6"></p>
  	</div>
    <div class="input-group">
  	  <label>Favourite person Name(*forgot password purpose)</label>
  	  <input type="text" name="favreg" required >
  	</div>
    
  	<div class="input-group">
  	  <button type="submit"  class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
        <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>
</html>
 