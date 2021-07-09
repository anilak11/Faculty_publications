<!DOCTYPE html>
<html lang="en">
<?php
	include("server.php");
    include('connection.php');
	//session_start();
	error_reporting(0);
?>
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
    <title>Anil Neerukonda Institute of Technology and Sciences</title>
</head>

<body style="background-color:yellow;background-image: url('images/backy3.png');">
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
    
    <div class="container" style="background-color:skyblue;margin-top:10%">
        <div class="row row-content">
           <div class="col-12">
              <h3 style="color:Orange;margin-left:35%">RESET PASSWORD</h3>
           </div>
            <div class="col-12 col-md-9">
                <form method="post" action="fpassword.php" autocomplete="off">
                <?php  if (count($errors) > 0) : ?>
                <div class="error">
                    <?php foreach ($errors as $error) : ?>
                    <h4 style="color:red ;margin-left: 150px;"><?php echo $error ?></h4>
                    <?php endforeach ?>
                </div>
                <?php  endif ?>
                <div class="form-group row">
                        <label for="fidforgot" class="col-md-2 col-form-label">Enter Faculty Id</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="fidforgot" name="fidforgot" placeholder="Enter Your Id">
                        </div>
                    </div>
                <div class="form-group row">
                        <label for="favforgot" class="col-md-2 col-form-label">What is Your Favourite person Name</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text"  class="form-control" id="favforgot" name="favforgot" placeholder="Enter the name of your favourite person">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newpforgot" class="col-md-2 col-form-label">Enter New Password</label>
                        <div class="col-md-10">
                            <input style="padding:15px"  type="password" class="form-control" id="newpforgot" name="newpforgot" placeholder="Enter new password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newp2forgot" class="col-md-2 col-form-label">Confirm New Password</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="password" class="form-control" id="newp2forgot" name="newp2forgot" placeholder="confirm new password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary btn-lg fa fa-lock fa-lg" name="btnforgot">
                                Reset
                            </button>
                            
                        </div>
                    </div>
                 </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>
    </div>
    <?php/*
	if(isset($_POST['btnforgot']))
	{
		$id1=$_POST['fidforgot'];
        $favperson=$_POST['favforgot'];
		$pass1=$_POST['newpforgot'];
        $pass2=$_POST['newp2forgot'];
		$query="select * from user where facultyid='$id1'";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
       
		if($total==0)
		{
			header("location:loginfalse.php");
		}
		else
		{
			$result=mysqli_fetch_assoc($data);
			if($favperson==$result['favperson'])
			{
                
				$query="update user set password='$pass1' ,favperson='chaithu' where facultyid='$id1'";
		        $data=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($data);
				header("location:facultypage.php");
			}
			else
			{
				header("location:index.php");
			}
		}
		exit;
	}
 */ ?>
     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
