<?php include('connection.php') ?>
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
     <link rel="stylesheet" href="emo.css">
    <title>Anil Neerukonda Institute of Technology and Sciences</title>
</head>

<body style="font-size:13px">
    <nav class="navbar navbar-dark navbar-expand  fixed-top">
        <div class="container " style="margin-left:0px">
            <a  href="index.php"><img src="images/img2.jpg" height="30" width="45"></a>
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                <li class="nav-item " ><a class="nav-link" href="aboutus.php"><span class="fa fa-info-circle fa-lg"></span>About</a></li>
                <li class="nav-item" ><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                <li class="nav-item" style="margin-left:700px"><a class="nav-link" href="logout.php"><span class="fa fa-sign-out fa-lg"></span>Logout</a></li>
            </ul>
        </div>
    </nav>


    <div class="row row-content" style="margin-left:200px;margin-top:8%">
           <div class="col-12 col-sm-9">
               <h2>Your Publications</h2>
               <div class="table-responsive">
                   <table class="table table-striped">
                       <thead class="thead-dark">
                           <tr>
                               <th>YEAR</th>
                               <th>LINK</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <th>2021-22</th>
                               <td><a href="viewfac2021.php" target="blank">Click Here</a></td>
                           </tr>
                           <tr>
                               <th>2020-21</th>
                               <td><a href="viewfac2020.php" target="blank">Click Here</a></td>
                               
                           </tr>
                           <tr>
                               <th>2019-20</th>
                               <td><a href="http://cse.anits.edu.in/faculty/fac_pub1718.pdf" target="blank">Click Here</a></td>
                               
                           </tr>
                           <tr>
                               <th>2018-19</th>
                               <td><a href="http://cse.anits.edu.in/faculty/fac_pub1617.pdf" target="blank">Click Here</a></td>
                               
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div> 
           <div class="col-12 col-sm-3">
            
           </div>    
       </div>
    
     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>