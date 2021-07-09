<?php 
    include('connection.php');
    //session_start();

    //count of international journals
    $result1=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Journal' and yop='2021'");
    $international2021=mysqli_fetch_assoc($result1);
    $result2=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Journal' and yop='2020'");
    $international2020=mysqli_fetch_assoc($result2);
    $result3=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Journal' and yop='2019'");
    $international2019=mysqli_fetch_assoc($result3);
    $result4=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Journal' and yop='2018'");
    $international2018=mysqli_fetch_assoc($result4);
    $result5=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Journal' and yop='2017'");
    $international2017=mysqli_fetch_assoc($result5);

    //count of international conference
    $anti1=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Conference' and yop='2021'");
    $internationalc1=mysqli_fetch_assoc($anti1);
    $anti2=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Conference' and yop='2020'");
    $internationalc2=mysqli_fetch_assoc($anti2);
    $anti3=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Conference' and yop='2019'");
    $internationalc3=mysqli_fetch_assoc($anti3);
    $anti4=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Conference' and yop='2018'");
    $internationalc4=mysqli_fetch_assoc($anti4);
    $anti5=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='International Conference' and yop='2017'");
    $internationalc5=mysqli_fetch_assoc($anti5);


    //count of national conference
    $nis1=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Conference' and yop='2021'");
    $nationalc2021=mysqli_fetch_assoc($nis1);
    $nis2=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Conference' and yop='2020'");
    $nationalc2020=mysqli_fetch_assoc($nis2);
    $nis3=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Conference' and yop='2019'");
    $nationalc2019=mysqli_fetch_assoc($nis3);
    $nis4=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Conference' and yop='2018'");
    $nationalc2018=mysqli_fetch_assoc($nis4);
    $nis5=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Conference' and yop='2017'");
    $nationalc2017=mysqli_fetch_assoc($nis5);




    //count of National journal
    $sai1=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Journal' and yop='2021'");
    $nationalj2021=mysqli_fetch_assoc($sai1);
    $sai2=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Journal' and yop='2020'");
    $nationalj2020=mysqli_fetch_assoc($sai2);
    $sai3=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Journal' and yop='2019'");
    $nationalj2019=mysqli_fetch_assoc($sai3);
    $sai4=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Journal' and yop='2018'");
    $nationalj2018=mysqli_fetch_assoc($sai4);
    $sai5=mysqli_query($db,"SELECT count(*) as total from faculty2021 where type='National Journal' and yop='2017'");
    $nationalj2017=mysqli_fetch_assoc($sai5);


    //total publications count
    $ak1=mysqli_query($db,"SELECT count(*) as total from faculty2021 where yop='2021'");
    $total2021=mysqli_fetch_assoc($ak1);
    $ak2=mysqli_query($db,"SELECT count(*) as total from faculty2021 where yop='2020'");
    $total2020=mysqli_fetch_assoc($ak2);
    $ak3=mysqli_query($db,"SELECT count(*) as total from faculty2021 where yop='2019'");
    $total2019=mysqli_fetch_assoc($ak3);
    $ak4=mysqli_query($db,"SELECT count(*) as total from faculty2021 where yop='2018'");
    $total2018=mysqli_fetch_assoc($ak4);
    $ak5=mysqli_query($db,"SELECT count(*) as total from faculty2021 where yop='2017'");
    $total2017=mysqli_fetch_assoc($ak5);
?>










<!DOCTYPE html>
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
    <link href="emo.css" rel="stylesheet">
    
    <title>Ristorante Con Fusion: About Us</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand  fixed-top">
        <div class="container " style="margin-left:0px">
            <a  href="index.php"><img src="images/img2.jpg" height="30" width="45"></a>
            <ul class="navbar-nav">
                <li class="nav-item "><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                <li class="nav-item active" ><a class="nav-link" href="aboutus.php"><span class="fa fa-info-circle fa-lg"></span>About</a></li>
                <li class="nav-item" ><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                <li class="nav-item" style="margin-left:700px"><a class="nav-link" href="login.php"><span class="fa fa-sign-in fa-lg"></span>Login</a></li>
            </ul>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Dept. of CSE</h1>
                    <p>Welcome to the Computer Science and Engineering at Anil Neerukonda Institute of Science and Technology.
                    The Department has marked a steady growth in terms of human recourses, Laboratories and space. It has 34 qualified teachers (Meeting the norms of AICTE) who are having rich academic and industrial experience headed by Dr.R.Sivaranjani with 18 years of experience in teaching.
                    ANITS CSE Department offers excellent opportunities for students to study state-of-the-art topics and perform state-of-the-art research. The students graduating from the department have the highest placement figures with excellent starting salaries. Companies like Amazon, Infosys, Virtusa, TCS, WIPRO, Oracle, IBM etc</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="log.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Aboutus</li>
            </ol>
            <div class="col">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col col-sm-6">
                <h3 style="color:blue">Programs offered</h3>
                <ol>
                    <li>B.Tech in CSE : Student Intake(180+ Lateral Entry : 10% at II year)</li>
                    <li> B.Tech in CSE with AI&ML : Student Intake(30)</li>
                    <li>B.Tech in CSE with Data Science : Student Intake(60)</li>
                </ol>
                <br>
                <h3 style="color:blue">M.Tech</h3>
                <ol>
                    <li>Intake : 18</li>
                    <li>Specialization : <b><strong>Computer Science & Technology</strong></b></li>
                </ol>
            </div>
            <div class="col col-sm" style="background-color:skyblue"><br>
            At ANITS, the education in Computer Science and Engineering will provide you with the understanding and knowledge to grasp the drastic changing in technologies that impact your fascinating field. The undergraduate program is designed to reinforce student’s educational breadth with specialized areas such as Discrete Mathematical Structures, Digital Logic and Design, Design thinking and product Innovation,Data structures and Algorithms, Object Oriented Programming, Database Management systems,Artificial Intelligence,Machine Learning, Deep Learning , Network Security and Cryptography, Computer Graphics, web Technologies, Data Science, Introduction To Competitive Coding etc.
            </div>
        </div>
       <div class="row row-content">
           <div class="col-12 col-sm-9">
               <h2>Faculty Publications</h2>
               <div class="table-responsive">
                   <table class="table table-striped">
                       <thead class="thead-dark">
                           <tr>
                               <th>&nbsp;</th>
                               <th>2020-21</th>
                               <th>2019-20</th>
                               <th>2018-19</th>
                               <th>2017-18</th>
                               <th>2016-17</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <th>International Journals</th>
                               <td><?php echo  $international2021['total'] ?></td>
                               <td><?php echo  $international2020['total'] ?></td>
                               <td><?php echo  $international2019['total'] ?></td>
                               <td><?php echo  $international2018['total'] ?></td>
                               <td><?php echo  $international2017['total'] ?></td>
                           </tr>
                           <tr>
                               <th>International conference</th>
                               <td><?php echo $internationalc1['total'] ?></td>
                               <td><?php echo $internationalc2['total'] ?></td>
                               <td><?php echo $internationalc3['total'] ?></td>
                               <td><?php echo $internationalc4['total'] ?></td>
                               <td><?php echo $internationalc5['total'] ?></td>
                           </tr>
                           <tr>
                               <th>National conference</th>
                               <td><?php echo $nationalc2021['total'] ?></td>
                               <td><?php echo $nationalc2020['total'] ?></td>
                               <td><?php echo $nationalc2019['total'] ?></td>
                               <td><?php echo $nationalc2018['total'] ?></td>
                               <td><?php echo $nationalc2017['total'] ?></td>
                           </tr>
                           <tr>
                               <th>National journals</th>
                               <td><?php echo $nationalj2021['total']?></td>
                               <td><?php echo $nationalj2020['total']?></td>
                               <td><?php echo $nationalj2019['total']?></td>
                               <td><?php echo $nationalj2018['total']?></td>
                               <td><?php echo $nationalj2017['total']?></td>
                           </tr>
                           
                           <tr>
                               <th>Total publications</th>
                               <td><?php echo $total2021['total'] ?></td>
                               <td><?php echo $total2020['total'] ?></td>
                               <td><?php echo $total2019['total'] ?></td>
                               <td><?php echo $total2018['total'] ?></td>
                               <td><?php echo $total2017['total'] ?></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div> 
           <div class="col-12 col-sm-3">
            
           </div>    
       </div>
    </div>
    <footer class="footer">
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
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="js/scripts.js"></script>
</body>
</html>