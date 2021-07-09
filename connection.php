<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password_1="";
$password_2="";
$phone="";
$fullname="";
$favperson="";
$errors = array(); 
//$_SESSION['facultyid']="";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'facultypub');

// REGISTER USER
if (isset($_POST['reg_user'])) {
// receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['fidreg']);
  $email = mysqli_real_escape_string($db, $_POST['emailreg']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1reg']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2reg']);
  $phone= mysqli_real_escape_string($db, $_POST['phonereg']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullnamereg']);
  $favperson= mysqli_real_escape_string($db, $_POST['favreg']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if(strlen($password_1)<5 or strlen($password_1)>15){
    array_push($errors, "Password length should be between 5-15 characters");
  }
  if(strlen($phone)!=10)
  {
    array_push($errors,"phone number must be 10digits");
  }

  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE facultyid='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['facultyid'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (facultyid, email, password,phone,fullname,favperson) 
  			  VALUES('$username', '$email', '$password','$phone','$fullname','$favperson')";
  	mysqli_query($db, $query);
  	$_SESSION['facultyid'] = $username;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['fullname']=$fullname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: facultypage.php');
  }
}
//login user
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE facultyid='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $result=mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['facultyid'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      $_SESSION['fullname']=$result['fullname'];
      $_SESSION['email']=$result['email'];
      $_SESSION['phone']=$result['phone'];
  	  header('location: facultypage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



//forgot password checking
if (isset($_POST['btnforgot'])) {
  // receive all input values from the form
    $facultyid = mysqli_real_escape_string($db, $_POST['fidforgot']);
    $favperson = mysqli_real_escape_string($db, $_POST['favforgot']);
    $password_1 = mysqli_real_escape_string($db, $_POST['newpforgot']);
    $password_2 = mysqli_real_escape_string($db, $_POST['newp2forgot']);
    $query="select * from user where facultyid='$facultyid'";
		$data=mysqli_query($db,$query);
    $result=mysqli_fetch_assoc($data);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if(!$result['facultyid'])
    {
      array_push($errors,"faculty doesn't exixts");
    }
    elseif($facultyid!=$result['facultyid'])
    {
      array_push($errors,"faculty doesn't exixts");
    }
    elseif($favperson!=$result['favperson'])
			{
        array_push($errors,"favperson does not matches");
      }
    else if (empty($facultyid)) { array_push($errors, "facultyid is required"); }
    else if (empty($favperson)) { array_push($errors, "This field is required"); }
    else if(strlen($password_1)<5 or strlen($password_1)>15){
      array_push($errors, "Password length should be between 5-15 characters");
    }
  
    else if (empty($password_1)) { array_push($errors, "Password is required"); }
    else if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE facultyid='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
  
      $query = "update  user set password='$password' where facultyid='$facultyid'";
      mysqli_query($db, $query);
      header('location: index.php');
    }
  }
  
//completing user profile

if (isset($_POST['btnprofile'])) {
  // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['fidprofile']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstnameprofile']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastnameprofile']);
    $department = mysqli_real_escape_string($db, $_POST['deptprofile']);
    $phone= mysqli_real_escape_string($db, $_POST['telnumprofile']);
    $email = mysqli_real_escape_string($db, $_POST['emailprofile']);
    $address= mysqli_real_escape_string($db, $_POST['feedbackprofile']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "Username is required"); }
    if (empty($address)) { array_push($errors, "Email is required"); }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE facultyid='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['facultyid'] != $username) {
        array_push($errors, "faculty doesn't exists");
      }
      if ($user['email'] != $email) {
        array_push($errors, "email doesn't exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
  
      $query = "INSERT INTO profile (facultyid, firstname, lastname,department,phone,email,address) 
            VALUES('$username', '$firstname', '$lastname','$department','$phone','$email','$address')";
      mysqli_query($db, $query);
      $_SESSION['facultyid'] = $username;
      $_SESSION['email']=$email;
      $_SESSION['phone']=$phone;
      $_SESSION['fullname']=$fullname;
      $_SESSION['success'] = "You are now logged in";
      header('location: facultypage.php');
    }
  }





  //insert journal

  if (isset($_POST['btninsert'])) {
    // receive all input values from the form
      $username = mysqli_real_escape_string($db, $_SESSION['facultyid']);
      $journalid = mysqli_real_escape_string($db, $_POST['jidinsert']);
      $title = mysqli_real_escape_string($db, $_POST['titleinsert']);
      $author = mysqli_real_escape_string($db, $_POST['anameinsert']);
      $dept= mysqli_real_escape_string($db, $_POST['deptinsert']);
      $jrnlname = mysqli_real_escape_string($db, $_POST['jnameinsert']);
      $type= mysqli_real_escape_string($db, $_POST['jtypeinsert']);
      $dop= mysqli_real_escape_string($db, $_POST['dopinsert']);
      $yop= mysqli_real_escape_string($db, $_POST['yopinsert']);
      $issn= mysqli_real_escape_string($db, $_POST['issninsert']);
      $file= mysqli_real_escape_string($db, $_POST['fileinsert']);
      $details=mysqli_real_escape_string($db, $_POST['feedbackinsert']);
  
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      
      
      $table='faculty2021';
      $another="SELECT * FROM profile WHERE facultyid='$username' LIMIT 1";
    $anotherresult=mysqli_query($db, $another);
    $anotheruser=mysqli_fetch_assoc($anotherresult);
  
  
    if(!$anotheruser['facultyid'])
    {
      array_push($errors, "complete your profile first");
    }
    else if($anotheruser['faculty']!=$facultyid)
    {
      array_push($errors, "faculty doesnt exists");
    }
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        //$password = md5($password_1);//encrypt the password before saving in the database
        $table='faculty2021';
        //$bk=$_FILES['fileinsert']['name'];
        //$ak=file_get_contents ('C:\Users\anilk\Downloads');
        $query = "insert into $table values('$username','$journalid','$title','$author','$dept','$jrnlname','$type','$yop','$dop','$issn','$file','$details')";
        
        mysqli_query($db, $query);
        
        header('location: facultypage.php');
      }
    }
  

  
//update journal

if (isset($_POST['btnupdate'])) {
  // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_SESSION['facultyid']);
    $journalid = mysqli_real_escape_string($db, $_POST['jidinsert']);
    $title = mysqli_real_escape_string($db, $_POST['titleinsert']);
    $author = mysqli_real_escape_string($db, $_POST['anameinsert']);
    $dept= mysqli_real_escape_string($db, $_POST['deptinsert']);
    $jrnlname = mysqli_real_escape_string($db, $_POST['jnameinsert']);
    $type= mysqli_real_escape_string($db, $_POST['jtypeinsert']);
    $dop= mysqli_real_escape_string($db, $_POST['dopinsert']);
    $yop= mysqli_real_escape_string($db, $_POST['yopinsert']);
    $issn= mysqli_real_escape_string($db, $_POST['issninsert']);
    $file= mysqli_real_escape_string($db, $_POST['fileinsert']);
    $details=mysqli_real_escape_string($db, $_POST['feedbackinsert']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    
    
    $table='faculty2021';
    $another="SELECT * FROM $table WHERE facultyid='$username' LIMIT 1";
  $anotherresult=mysqli_query($db, $another);
  $anotheruser=mysqli_fetch_assoc($anotherresult);


  if(!$anotheruser['journalid'])
  {
    array_push($errors, "Journal doesn't exists");
  }
  else if($anotheruser['journalid']!=$journalid)
  {
    array_push($errors, "journal doesnt exists");
  }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      //$password = md5($password_1);//encrypt the password before saving in the database
      $table='faculty2021';
      //$bk=$_FILES['fileinsert']['name'];
      //$ak=file_get_contents ('C:\Users\anilk\Downloads');
      $query = "update $table set  title='$title',author='$author',department='$dept',jrnlname='$jrnlname',type='$type',yop='$yop',dop='$dop',issn='$issn',file='$file',details='$details' where facultyid='$username' and journalid='$journalid'";
      mysqli_query($db, $query);
      
      header('location: facultypage.php');
    }
  }



  //delete journal
  if (isset($_POST['btndel'])) {
    // receive all input values from the form
      $fid = mysqli_real_escape_string($db, $_POST['fiddel']);
      $jid = mysqli_real_escape_string($db, $_POST['jiddel']);
      $yid=mysqli_real_escape_string($db, $_POST['yeardel']);
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($fid)) { array_push($errors, "Username is required"); }
      if (empty($jid)) { array_push($errors, "Email is required"); }
    
      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $table='faculty2021';
      $user_check_query = "SELECT * FROM $table WHERE facultyid='$fid' and  journalid='$jid' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      
      if ($user) { // if user exists
        if ($user['facultyid'] != $fid) {
          array_push($errors, "faculty doesn't exists");
        }
        if ($user['journalid'] != $jid) {
          array_push($errors, "journal doesn't exists");
        }
      }
      else{
        array_push($errors,"Journal doesn't exits");
      }
    
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        //$password = md5($password_1);//encrypt the password before saving in the database
    
        $query = "delete from $table where facultyid='$fid' and journalid='$jid'";
        mysqli_query($db, $query);
        $_SESSION['facultyid'] = $fid;
        header('location: facultypage.php');
      }
    }
  
?>
