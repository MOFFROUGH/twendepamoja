<?php 
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['userid']))
  { if(isset($_SESSION['driver'])){
     if($_SESSION['driver']==1){
    echo "Logout to access this page";
    header("Location:index.php");}}
  }
//echo "Logged in as ". $_SESSION['userid']
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>TwendePamoja</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: gray; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>
</head>
<body>

<!-- Navbar -->
<div class="row">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Passenger [<?php echo $_SESSION['userid']?>]</a></li>
        <li><a href="help.php#section2"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>

        <!--li style="color: white"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['userid']?></li-->
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>


    </div>
  </div>
</nav>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Routes</a>
  <a href="#">Contact</a>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
</div>

<!-- First Container --><div class="container-fluid bg-1 text-center">
<div class="row">



  <div class="col-sm-8">
    <div  style="border-radius: 8px">
            <!--h3 style="color:blue"><b>Welcome to Twende Pamoja [<?php echo $_SESSION['userid']?>]</b></h3-->
            <p> This is a platform that allows you to easily travel by merging with other travellers</p>            
            <h3 style="color: blue"><b>Edit Profile?</b></h3><hr style="border-width: 2px; border-color: blue ">
            <p>click<a href="profileupdate.php"> here.</a> to edit your profile</p>
      </div>  
    </div>
  <div class="col-md-2"><h3>Adventurer</h3><img src="moff.jpg" class="img-responsive img-circle margin" style="display:inline" alt="moff" width="100" height="100"></div>
  
</div>
</div>
<div class="row">
<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <div class="row">
  <h3 class="margin">Find Rides</h3>
  <p>You can use this app to find places you want to travel to or wish to. We will store these places and when we find another interested party we link you up </p>
    <form method="POST" class="form-horizontal "  role="form">
        <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="location">Home or Destination</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="location">
                     <option value="">Choose your location</option>
                     <option value="home">Home</option>
                     <option value="destination">Destination</option>
                   </select>
                 </div>
               </div>
       <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="time">Leaving in:</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="time">
                     <option value="">Choose your time</option>
                     <option value="0">Now</option>
                     <option value="5">5 minutes</option>
                     <option value="10">10 minutes</option>
                     <option value="15">15 minutes</option>
                     <option value="20">Waiting</option>
                     </select>
                 </div>
               </div>
      
       <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="space">Spaces Left</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="space">
                     <option value="">Choose Spaces left:</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>                     
                   </select>
                 </div>
               </div>
               <br><br>
       <div class="form-group"> 
          <div class="col-sm-offset-1 col-sm-8">
           <button type="post" class="col-sm-offset-2 btn btn-success col-sm-10  btn-lg" name="sub"><span class="glyphicon glyphicon-search"> </span> Find</button>
           </div>
           <div class="clearfix"></div>
  
        </div>
</form>
</div>
       <div class="row text-center col-sm-10 col-sm-offset-1">
                     <table class="table table-condensed text-center ">
                              <tr>
                                    <td><b>location</b></td> 
                                    <td><b>Leaving in:(mins)</b></td>
                                    <td><b>spaces available</b></td>
                                    <td><b>Driver name</b></td>
                                    <td><b>Driver email</b></td>
                                    <!--th>Apply</th-->
                                </tr>

                                <?php 
                                  if (isset($_POST['sub'])) {
 
                                     $location = $_POST['location'];
                                      $time = $_POST['time'];
                                      $space = $_POST['space'];
                                      $email='mk@c.com';
                                      mysql_connect("localhost","root");
                                      mysql_select_db("twendepamoja");
                                      
                                      mysql_select_db('twendepamoja');

                                  // connect to mysql
                                      $dbhost = 'localhost';
                                      $dbuser = 'root';
                                      $dbpass = '';
                                             $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                      if(! $conn )
                                      {
                                      die('Could not connect: ' . mysql_error());
                                      }
                                      $sql = "UPDATE traveldetails SET location='$location',time='$time',Spaces='$space' WHERE email='mk@c.com'";
                                      mysql_select_db('twendepamoja');
                                      $retval = mysql_query( $sql, $conn );
                                      if(! $retval )
                                      {
                                      die('Could not update data: ' . mysql_error());
                                      }
                                      //echo "Updated data successfully\n";
                                      //mysql_close($conn);
                                  $connect = mysqli_connect("localhost", "root", "", "twendepamoja");

                                  //$category = $_POST['category'];
                                  // mysql select query
                                  //$category = $_POST['category'];
                                  //$id=$_POST['jobID'];

                                  $query = "SELECT * FROM traveldetails WHERE location='$location' OR Spaces='$space' OR time<'$time'";


                                  // result for method one
                                  $result1 = mysqli_query($connect, $query);

                                  // result for method two 
                                  $result2 = mysqli_query($connect, $query);

                                  $dataRow = "";


                                  while($row2 = mysqli_fetch_array($result2))
                                  {
                                       $dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr><tr><td>$row2[4]</td><td>";
                                  }
                                while($row1 = mysqli_fetch_array($result1)):;
                                ?>

                                <tr>
                                    <td><?php echo $row1[0];?></td>
                                    <td><?php echo $row1[1];?></td>
                                    <td><?php echo $row1[2];?></td>
                                    <td><?php echo $row1[3];?></td>
                                    <td><?php echo $row1[4];?></td>
                                                             
                                </tr>
                                <?php endwhile;
                                //mysql_close($connect);
                               }
                               
                               ?>
                               </table>
                    </div>
              

</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Places Travelled</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Maasai Mara National Park,Kenya.</p>
      <img src="images1.jpg" class="img-responsive margin" style="width:100%" alt="images1">
    </div>
    <div class="col-sm-4"> 
      <p>The Winter Forest,Canada.</p>
      <img src="images4.jpg" class="img-responsive margin" style="width:100%" alt="images4">
    </div>
    <div class="col-sm-4"> 
      <p>Mount Kenya,Kenya.</p>
      <img src="images3.jpg" class="img-responsive margin" style="width:100%" alt="images3">
    </div>

  </div>

</div>
</div>

<!-- Footer -->
<div class="row">
<footer class="container-fluid bg-4 text-center">
  <p>Powered by <a href="https://www.twendepamoja.com">Twende Pamoja Travels</a></p> 
</footer>
</div>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
