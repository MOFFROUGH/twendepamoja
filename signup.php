<?php
if (isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['othernames'];
  $idnumber = $_POST['idnumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
   $car = $_POST['car'];
  $homenumber = $_POST['homenumber'];
  $company = $_POST['company'];
 

  mysql_connect("localhost","root");
  mysql_select_db("twendepamoja");

  if ($firstname == null || $lastname ==null || $idnumber ==null || $email ==null || $password == null) {
            echo' <div class="alert alert-block alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Fill all the fields and try again.  </div>';
  }else{

        $res=mysql_query("SELECT * FROM userdetails WHERE email='$email' || idnumber='$idnumber' ") or 
        die(mysql_error());

        $count=mysql_num_rows($res);

        if($count!=null){
        echo' <div class="alert alert-block alert-danger fade in">';
        echo' <button type="button" class="close" data-dismiss="alert">×</button>';
        echo" <strong></strong>Failed to Sign Up.<br/>User Account already exists<br/>"; 
        echo"   </div>";}
        else{
          $insert = mysql_query("INSERT INTO `userdetails`(`firstname`, `lastname`, `idnumber`, `email`, `password`, `homenumber`, `car`, `company`) VALUES ('$firstname','$lastname','$idnumber','$email','$password','$homenumber','$car','$company')") or die(mysql_error());
              if ($insert) {
                        echo' <div class="alert alert-block alert-success fade in">';
                        echo' <button type="button" class="close" data-dismiss="alert">×</button>';
                        echo" Client has successfully been added.<br/>
                        </div>";}
                        else{
                        echo' <div class="alert alert-block alert-danger fade in">';
                        echo' <button type="button" class="close" data-dismiss="alert">×</button>';
                        echo" An error occured in adding client. Try again.<br/>
                        </div>";
                        }
        }   
  }
}
#header("Location:index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TwendePamoja</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body style="background-image: url(images1.jpg)">
    <div class="row">
<nav class="navbar navbar-inverse">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand " href="index.php">TwendePamoja</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
          <li ><a href="index.php">Home</a></li>
         <li class="active" ><a href="#">Signup</a></li> 
         <li ><a href="more.php">More</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>
        
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
      </ul>
    </div>
</nav>
</div>
<div class="container">
<div class="row">
  <h1 class="text-center"></h1>
</div>
  <div class="row">

    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="jumbotron">
    <h3 class="text-center">Create Account</h3>


    <form  method="POST" class="form-horizontal "  role="form">

       <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="firstname">FirstName </label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" required="">
         </div>
       </div>

      <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="othernames">Other Names </label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="othernames" placeholder="Enter other names" required="">
         </div>
       </div>

        <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="company">Company/College/Community</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="company" placeholder="Enter Company/College/Community" required="">
         </div>
       </div>

      
       <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="homenumber">Home</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="homenumber" placeholder="Enter home number" required="">
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="phonenumber">Phone</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="phonenumber" placeholder="Enter phonenumber" required="">
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="idnumber">IdNumber</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="idnumber" placeholder="Enter  id number" required="">
         </div>
       </div>
       <div class="form-group"> 
         <div class=" col-sm-10">
           <div class="checkbox">
             <label class="col-sm-offset-2"><input type="checkbox" name="car" value="1"> Check if you have a Car</label>
           </div>
         </div>
       </div>

      <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="email">Email</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
         </div>
       </div>


       <div class="form-group">
         <label class="control-label col-sm-offset-1 col-sm-2" for="pwd">Password</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-10"> 
           <input type="password" class="form-control" name="password" placeholder="Enter password" required="" >
         </div>
       </div>
       	<div class="form-group">
         <label class="control-label col-sm-offset-1 col-sm-2" for="rpwd">Confirm Password</label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-10"> 
           <input type="password" class="form-control" name="rpassword" placeholder="Confirm password" required="" >
         </div>
       </div>


       <div class="form-group"> 
         <div class="col-sm-offset-1 col-sm-8">
           <button type="submit" class="col-sm-offset-2 btn btn-success col-sm-10 center" name="submit">Submit</button>
         </div>
         <div class="clearfix"></div>
  
       </div>
    </form>




    </div>
    </div>

    <div class="col-sm-3"></div>
  </div>
</div>


</div>

</body>
</html>