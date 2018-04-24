 <?php 
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['userid'])){header("Location:index.php");}
//echo "Logged in as ". $_SESSION['userid']
?>
 <?php

// php populate html table from mysql database
//if (isset($_POST['set'])) {
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "twendepamoja";
//$email=$_SESSION['userid'];
$email='b@v.com';
// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM userdetails WHERE email='$email'";


// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two 
$result2 = mysqli_query($connect, $query);

$dataRow = "";
//mysql_connect("localhost","root");
//mysql_select_db("jobmatch");
//$result221 = mysql_query("SELECT status FROM jobs WHERE email='$email'") or die(mysql_error());
//$row3 = mysql_fetch_row($result221);
//if($row3[0]==1){togglevalue();}

while($row2 = mysqli_fetch_array($result2))
{
     $dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr><tr><td>$row2[4]</td><td>";
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
<div class="container" style="background: seagreen">
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
          <li><a href="driver.php">Home</a></li> 
          <li class="active"><a href="availableriders.php">Available Riders</a></li> 
         <li ><a href="Contactus.php">Queries</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>
        <li><a href="List.php"><span class="glyphicon glyphicon-log-out"></span>Take a Tour</a></li>
      </ul>
    </div>

</nav>
<div class="row">
  <h1 class="text-center">TWENDE PAMOJA TRAVEL SOLUTIONS</h1>
</div>

<form>
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
           <button type="post" class="col-sm-offset-2 btn btn-success col-sm-10 center" name="set">Set</button>
         </div>
         <div class="clearfix"></div>
  
       </div>
</form>
  <div class="row text-center col-sm-10 col-sm-offset-1">
 <h1>clients available</h1>
        <table class="table table-striped">

            <tr>
                <th>firstname</th>
                <th>lastname</th>
                <th>idnumber</th>
                <th>email</th>
                <th>home</th>
                <th>company</th>
                <th>Status</th>
                

            </tr>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[7];?></td>
                <td><form  method="POST" class="form-horizontal "  role="form">
                                      <div class="form-group"> 
                                       <div class=" col-sm-10">
                                         <button id="btn1" type="text" class=" btn btn-danger col-sm-8 center"  name="apply" > Not Picked</button>
                                          </div>                         
                                           </div></form>
                </td>
            </tr>
            <?php endwhile;?>

        </table>

   
    
  </div>
</div>
</body>
</html>