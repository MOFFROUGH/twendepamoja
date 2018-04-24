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
<body style="background-color: seagreen">

<div class="container-fluid">
	
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
          <li ><a href="passenger.php">Home</a></li>
         <li class="active"><a href="getride.php">My rides</a></li> 
         <li ><a href="more.php">More</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
</nav>
</div>

<div class="container" style="background: seagreen; padding-left: 30px; padding-right: 30px">
    <div class="row" style="padding-top: 10px; padding-bottom: 10px">
      <div class="header">
        <div class="head"><h1 style="color: white">Welcometo Twende Pamoja</h1></div>
        <div class="col-md-12" style="height: 20px ; background-color:lightyellow" > With Twende Pamoja, we are entitled to creating the environment of the people to post their jobs so that those who have the ablity to work on them can login and bid for it</div>
          <!--div class="clearfix"></div-->
      </div>
        <!-- Define the class Column for the Large and Media Devices-->
        <div class="col-md-12" style="background:white; padding-top: 10px; padding-bottom: 10px;border: 5px solid blue; border-radius: 8px" >

        <!-- This section gives the guideline on how to log in to the portal -->

          <div class="col-md-8 " style="background: white">
            <h3 style="color: #49BB14"><b><a href="getride.php">Get a ride?</a></b></h3><hr style="border-width: 2px; border-color: #49BB14 ">
            <p>In this section, give the clear details of the job you wanna post. Out of the specification is when you are going to get a client who gonna work on the specified job basing on the qualification and the experiance.</p><br/>

            <p>Take this opportunity to engage with the highly qualified and experienced people form all over the world!</p>

            <h3 style="color: #49BB14"><b><a href="#">Rate Us?</a></b></h3><hr style="border-width: 2px; border-color: #49BB14 ">
            <h4>What are the qualification for taking a job?</h4>
            <p></p><br>

            <p></p>
          </div>

        <!-- Declaration of the for group which holds the widgets for login in -->

          <div class="col-md-4  " style="background: #EDEFED">
            <h3 style="color: #49BB14">Job Specifcation</h3><hr style="border-width: 2px; border-color: #49BB14 ">
            <form  method="POST" class="form-horizontal "  role="form">

                <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="category">category</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="category">
                     <option value="">Choose your category</option>
                     <option value="IT">court 0-50</option>
                     <option value="CT">court 50-100</option>
                     <option value="ME">court 100-150</option>
                     <option value="Pr">court 150-200</option>
                     <option value="Arch">court 200-250</option>
                     <option value="ConMan">court 250-300</option>
                     <option value="CE">court 300-350</option>
                     <option value="BA">court 350-400</option>
                     <option value="AH">court 400-450</option>
                     <option value="RE">court 450-500</option>
                     <option value="E">court 500-550</option>
                   </select>
                 </div>
               </div>


               <div class="form-group"> 
                 <div class="col-sm-offset-1 col-sm-8">
                   <button type="post" class="col-sm-offset-2 btn btn-success col-sm-10 center" name="submit">post</button>
                 </div>
                 <div class="clearfix"></div>
          
               </div>
            </form>
                 </div>
               </div>
               <div class="clearfix"></div>
             </div>

          

          </div>  
      <!-- Declaration of another different row for the footer of the web page-->
      <div class="row">
        <div class="footer" style="color: white;text-align: center;padding-left: 5px;padding-right: 5px;padding-top: 5px">@twendepamoja 2017</div>
      </div>
    </div>      
</div>

</body>
</html>