<!DOCTYPE html>
<?php session_start(); 
    include('connection.php'); ?>
<html lang="en">
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

<body style="font-size:13px;background-color:black;background-image: url('images/backy4.jpg');">
    <nav class="navbar navbar-dark navbar-expand  fixed-top">
        <div class="container " style="margin-left:0px">
            <a  href="index.php"><img src="images/img2.jpg" height="30" width="45"></a>
            <ul class="navbar-nav">
                <li class="nav-item "><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                <li class="nav-item " ><a class="nav-link" href="aboutus.php"><span class="fa fa-info fa-lg"></span>About</a></li>
                <li class="nav-item" ><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                <li class="nav-item" style="margin-left:700px"><a class="nav-link" href="login.php"><span class="fa fa-sign-out fa-lg"></span>Log out</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" >
    <div class="row row-content">
           <div class="col-12">
              <center><h3 style="color:darkblue;color:white">COMPLETE YOUR PROFILE</h3></center>
           </div>
            <div class="col-12 col-md-9">
                <form method="post" action="cprofile.php" autocomplete="off">
                <?php  if (count($errors) > 0) : ?>
                    <div class="error">
                        <?php foreach ($errors as $error) : ?>
                        <p style="color:red;margin-left:200px"><?php echo $error ?></p>
                        <?php endforeach ?>
                    </div>
                <?php  endif ?>

                    <div class="form-group row">
                        <label for="fidprofile" class="col-md-2 col-form-label" style="color:white;">Faculty Id</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="fidprofile" name="fidprofile" value="<?php echo $_SESSION['facultyid'] ?>" placeholder="Enter Faculty Id"  required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstnameprofile" class="col-md-2 col-form-label" style="color:white;">First Name</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="firstnameprofile" name="firstnameprofile" value="<?php echo $_SESSION['fullname'] ?>" placeholder="First name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastnameprofile" class="col-md-2 col-form-label" style="color:white;">Last Name</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="lastnameprofile" name="lastnameprofile" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deptprofile" class="col-md-2 col-form-label" style="color:white;">Department</label>
                        <div class="col-md-10">
                            <select name="deptprofile" id="deptprofile">
                                <option value="cse">COMPUTER SCIENCE ENGINEERING</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnumprofile" class="col-12 col-md-2 col-form-label" style="color:white;">Contact tel.</label>
                        <div class="col-5 col-md-3">
                            <input style="padding:15px" type="number" maxlenght="2" class="form-control" id="areacode" name="areacode" placeholder="Area Code" required>
                        </div>
                        <div class="col-7 col-md-7">
                            <input style="padding:15px" type="tel" class="form-control" value="<?php echo $_SESSION['phone'] ?>" id="telnumprofile" name="telnumprofile" placeholder="Tel. Number"  required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailprofile" class="col-md-2 col-form-label" style="color:white;">Email</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="email" class="form-control" id="emailprofile" value="<?php echo $_SESSION['email'] ?>" name="emailprofile" placeholder="Email"  required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input style="padding:15px" type="checkbox" class="form-check-input" name="approve" if="approve" value="" required>
                                <label  class="form-check-label" for="approve">
                                    <strong style="color:white;"> &nbsp;&nbsp;  &nbsp;May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedbackprofile" class="col-md-2 col-form-label" style="color:white;">Adress</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedbackprofile" name="feedbackprofile" rows="12"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary btn-lg" name="btnprofile">
                                Submit
                            </button>
                        </div>
                    </div>
                 </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>
    </div>
    <footer class="footer" style="font-size:15px">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Anil Neerukonda hospital Road<br>
		              Sangivalasa-531162, Bheemunipatnam(Mandal)<br>
		              Visakhapatnam<br>
		              <i class="fa fa-phone fa-lg"></i>: 08933-225083<br>
		              <i class="fa fa-fax fa-lg"></i>:08933-226395<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:principal@anits.edu.in">principal@anits.edu.in</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021 Anits</p>
                </div>
           </div>
        </div>
    </footer>
     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>