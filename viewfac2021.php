<?php 
    
    include('connection.php');
    $username=$_SESSION['facultyid'];
    echo $username;
    $user_check_query = "SELECT * FROM faculty2021 WHERE facultyid='$username' and yop=2021";
    $result = mysqli_query($db, $user_check_query);
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


    <div class="row row-content" style="margin-left:100px;margin-top:50px">
           <div class="col-12 col-sm-11">
               <div class="table-responsive">
                   <table class="table table-striped">
                       <thead class="thead-dark">
                           <tr>
                               <th>NAME OF THE AUTHOR</th>
                               <th>NAME OF THE JOURNAL</th>
                               <th>TITLE OF THE PAPER</th>
                               <th>TYPE OF THE JOURNAL</th>
                               <th>DATE OF ISSUE</th>
                               <th>ISSN NUMBER</th>
                               <th>LINK TO THE JOURNAL</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php while(	($rows=mysqli_fetch_assoc($result))) 
		                { 
		                ?> 
                           <tr>
                               
                               <td><?php echo $rows['author'] ?></td>
                               <td><?php echo $rows['jrnlname'] ?></td>
                               <td><?php echo $rows['title'] ?></td>
                               <td><?php echo $rows['type'] ?></td>
                               <td><?php echo $rows['dop'] ?></td>
                               <td><?php echo $rows['issn'] ?></td>
                               <td><a href="<?php echo $rows['file'] ?>">clickhere</td>
                           </tr>
                           
                        <?php
                        }
                        ?>
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