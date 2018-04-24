<?php session_start();?>
<?php
if (isset($_POST['login'])) {
  mysql_connect("localhost", "root") or die(mysql_error());
  mysql_select_db("twendepamoja") or die(mysql_error());

  $email = $_POST['email'];
  $password = $_POST['password'];
  //$_SESSION['user']=$categ['0']

  $sql=mysql_query("SELECT * FROM userdetails WHERE email='$email' AND password='$password'") or 
  die(mysql_error());

  $count = mysql_num_rows($sql);

  if ($count < 1) {
    
  }else{
    $_SESSION['userid']=$_POST['firstname'];
    

    $sql2 = mysql_query("SELECT * FROM userdetails WHERE email='$email' AND password='$password'");;
    while ($colms = mysql_fetch_array($sql2)) {
      $categ = $colms['6'];
    }
    if($categ == "1" ){header("location:driver.php");
          }else{
      
      header("location:passengeredit.php");}

    
  }
}

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

<body>
<div class="container">
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
         <li ><a href="signup.php">Signup</a></li> 
         <li ><a href="more.php">More</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="help.php#section1"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
</nav>
</div>
<div class="row">
	<h1 class="text-center">TWENDE PAMOJA TRAVEL SOLUTIONS</h1>
</div>

	<div class="row">

		<div class="col-sm-8">
    <div  style="background: white;border-radius: 8px">
            <h3 style="color:blue"><b>What is Twende Pamoja</b></h3>
            <p> This is a platform that allows workers to get jobd and bosses have their work done as fast as possible from a wide range of experts</p><br/>

            
            <h3 style="color: blue"><b>Need a ride?</b></h3><hr style="border-width: 2px; border-color: blue ">
            <p>Sign up first and follow the simple guidelines<a href="help.php#section3"> here.</a></p><br>

            <h4 style="color: blue"><b>Can't find a ride?</b></h4>
            
            <p>If you want a more personalized ride send us an email at <a href="#">rides@twendepamoja.com</a></p><br>

            <p>For more information, please email us at <a href="#">info@twendepamoja.com</a></p>
          </div>  
    </div>
		<div class="col-sm-4">
		<div class="jumbotron">
		<h3 class="text-center">Log In</h3>

		<form method="POST" class="form-horizontal "  role="form">

         <div class="form-group">
         <label class="col-sm-offset-1 control-label col-sm-2" for="firstname">FirstName </label><div class="clearfix"></div>
         <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
           <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" required="">
         </div>
       </div>

 			 <div class="form-group">
 			   <label class="col-sm-offset-1 control-label col-sm-2" for="email">Email </label><div class="clearfix"></div>
 			   <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10">
 			     <input type="email" class="form-control" name="email" placeholder="Enter email">
 			   </div>
 			 </div>
 			 <div class="form-group">
 			   <label class="control-label col-sm-offset-1 col-sm-2" for="pwd">Password </label><div class="clearfix"></div>
 			   <div class="col-sm-offset-1 col-sm-10"> 
 			     <input type="password" class="form-control" name="password" placeholder="Enter password">
 			   </div>
 			 </div>
 			 <div class="form-group"> 
 			   <div class=" col-sm-10">
 			     <div class="checkbox">
 			       <label class="col-sm-offset-2"><input type="checkbox"> Remember me</label>
 			       <label><a href="changepassword.php"> Forgot password?</a></label>
 			     </div>
 			   </div>
 			 </div>
 			 <div class="form-group"> 
 			   <div class="col-sm-offset-1 col-sm-8">
 			     <button type="submit" name="login" class="col-sm-offset-2 btn btn-success col-sm-10 center">Login</button>
 			   </div>
 			   <div class="clearfix"></div>
 			   <h5 class="text-center">Not a member? <a href="signup.php">Create Account</a></h5>
 			 </div>
		</form>
		</div>
		</div>

		<div class="col-sm-3"></div>
	</div>
</div>

</body>
</html>