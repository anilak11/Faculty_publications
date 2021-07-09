<!DOCTYPE html>
<html lang="en">
<?php //session_start();
include('connection.php');
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

<body style="font-size:13px;background-color:black;background-image: url('images/backy2.jpg');">
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
    <div class="container" style="background-color:">
    <div class="row row-content">
           <div class="col-12">
              <h3 style="color:white;margin-left:35%">ADD JOURNAL</h3>
           </div>
            <div class="col-12 col-md-9">
                <form method="post" action="addjournal.php" autocomplete="off">
                <?php  if (count($errors) > 0) : ?>
                    <div class="error">
                        <?php foreach ($errors as $error) : ?>
                        <p style="color:red;margin-left:200px"><?php echo $error ?></p>
                        <?php endforeach ?>
                    </div>
                <?php  endif ?>
                    <div class="form-group row">
                        <label for="jidinsert" class="col-md-2 col-form-label"  style="color:white;">Jounral ID</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="jidinsert" name="jidinsert"   placeholder="Enter Journal Id" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="titleinsert" class="col-md-2 col-form-label" style="color:white;">Title of the Paper</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="titleinsert" name="titleinsert" placeholder="Title of the Paper" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anameinsert" class="col-md-2 col-form-label" style="color:white;"> Name of the Author</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="anameinsert" name="anameinsert" placeholder="Name of the Author" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deptinsert" class="col-md-2 col-form-label" style="color:white;">Department</label>
                        <div class="col-md-10">
                            <select name="deptinsert" id="deptinsert" class="col-md-12">
                                <option value="cse">COMPUTER SCIENCE ENGINEERING</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="jnameinsert" class="col-md-2 col-form-label" style="color:white;"> Name of the Journal</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="jnameinsert" name="jnameinsert" placeholder="Name of the Journal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jtypeinsert" class="col-md-2 col-form-label" style="color:white;">Type Of Journal</label>
                        <div class="col-md-10">
                            <select name="jtypeinsert" id="jtypeinsert" class="col-md-12">
                                <option value="International Conference">International Conference</option>
                                <option value="National Conference">National Conference</option>
                                <option value="International Journal">International Journal</option>
                                <option value="National Journal">National Journal</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="dopinsert" class="col-md-2 col-form-label" style="color:white;">Date of Publication</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="date" class="form-control" id="dopinsert" name="dopinsert" placeholder="Date Of Publication" min="2020-01-01" max="2050-12-31" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="yopinsert" class="col-md-2 col-form-label" style="color:white;">Year Of publication</label>
                        <div class="col-md-10">
                            <select name="yopinsert" id="yopinsert" class="col-md-12">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="issninsert" class="col-md-2 col-form-label" style="color:white;">ISSN Number</label>
                        <div class="col-md-10">
                            <input style="padding:15px" type="text" class="form-control" id="issninsert" name="issninsert" placeholder="Enter ISSN Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fileinsert" class="col-md-2 col-form-label" style="color:white;"> Link to the Journal</label>
                        <div class="col-md-10">
                            <input  style="padding:15px" type="url" class="form-control" id="fileinsert" name="fileinsert"  required placeholder="Enter/paste the URL here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedbackinsert" class="col-md-2 col-form-label" style="color:white;">Further Details</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedbackinsert" name="feedbackinsert" rows="12"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary btn-lg" name="btninsert">
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