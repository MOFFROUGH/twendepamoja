<?php 
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['userid'])){
	$_SESSION['driver']=1;
	header("Location:index.php");}
//echo "Logged in as ". $_SESSION['userid']
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
	 <style type="text/css">
                       #map { height: 300px; border: 0px; padding: 0px; }
        </style>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_QE7q_Oao3L92drvu-CCNU7mAGGqNMQs&sensor=false" type="text/javascript"></script>
        <script type="text/javascript">
            //Sample code written by August Li
            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
                       new google.maps.Size(32, 32), new google.maps.Point(0, 0),
                       new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }           
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(0, 0),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php

$conn = mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("mywrite") or die(mysql_error());
if(isset($_POST['submit'])){  
  $start=$_POST['from'];
  $stop=$_POST['to'];
  $query = mysql_query("SELECT * FROM poi_example where name='$start'")or die(mysql_error());
  $query2 = mysql_query("SELECT * FROM poi_example where name='$stop'")or die(mysql_error());
while($row = mysql_fetch_array($query))
{
  $name = $row['name'];
  $lat = $row['lat'];
  $lon = $row['lon'];
  $desc = $row['desc'];



  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");

}
while($row = mysql_fetch_array($query2))
{
  $name = $row['name'];
  $lat = $row['lat'];
  $lon = $row['lon'];
  $desc = $row['desc'];



  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc');\n");

}
}




?>
 center = bounds.getCenter();
     map.fitBounds(bounds);

     }
     </script>
</head>

<body onload="initMap()">
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
          <li class="active"><a href="driver.php">Home</a></li> 
          <li><a href="availableriders.php">Available Riders</a></li> 
         <li ><a href="help.php">Queries</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Driver [<?php echo $_SESSION['userid']?>]</a></li>
      	
        <li><a href="help.php#drivers"><span class="glyphicon glyphicon-hand-up"></span> Help</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
      </ul>
    </div>

</nav>
<div class="row">
	<h1 class="text-center">TWENDE PAMOJA TRAVEL SOLUTIONS</h1>
</div>
	<div class="row">

		<form method="POST" class="form-horizontal "  role="form">
        <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="location">Location</label><div class="clearfix"></div>
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
           <button type="post" class="col-sm-offset-2 btn btn-success col-sm-10 center" name="sub">post</button>
           </div>
           <div class="clearfix"></div>
  
        </div>
</form>
		<?php
			if (isset($_POST['sub'])) {
			 
			 $location = $_POST['location'];
			  $time = $_POST['time'];
			  $space = $_POST['space'];
			  $email='mk@c.com';
			  mysql_connect("localhost","root");
			  mysql_select_db("twendepamoja");

			  if ($location == null || $time ==null || $space ==null) {
			            echo' <div class="alert alert-block alert-danger fade in">
			            <button type="button" class="close" data-dismiss="alert">×</button>
			            Fill all the fields and try again.  </div>';
			  }else{

			        $res=mysql_query("SELECT * FROM traveldetails WHERE email='$email'") or 
			        die(mysql_error());

			        $count=mysql_num_rows($res);

			        if($count!=null){
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
							    echo "Updated data successfully\n";
							    mysql_close($conn);
			       }
			        else{
			        	mysql_connect("localhost","root");
					    mysql_select_db("twendepamoja");
					    $result221 = mysql_query("SELECT firstname FROM userdetails WHERE email='$email'") or die(mysql_error());
					    $row3 = mysql_fetch_row($result221);
			          $insert = mysql_query("INSERT INTO `traveldetails`(`location`, `time`, `spaces`,`name`, `email`) VALUES ('$location','$time','$space','$row3[0]','$email')") or die(mysql_error());
			              if ($insert) { echo' <div class="alert alert-block alert-success fade in">';
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



?>	
	
		</div>

		<div class="col-sm-10">
		<body >
     <div id="map"></div>
     <form method="POST" class="form-horizontal "  role="form">
        <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="from">from</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="from">
                     <option value="">Choose your Joblevel</option>
                     <option value="Nyayo Estate">Nyayo Estate</option>
                     <option value="Nyayo Stadium">Nyayo </option>
                     <option value="Nairobi">Nairobi</option>
                     <option value="Strathmore">University</option>
                    
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-offset-1 control-label col-sm-2" for="to">to</label><div class="clearfix"></div>
                 <div class="col-sm-offset-1 col-sm-offset-1 col-sm-10 selectContainer">
                   <select class="form-control" name="to">
                     <option value="">Choose your Joblevel</option>
                     <option value="Nyayo Estate">Nyayo Estate</option>
                     <option value="Nyayo Stadium">Nyayo </option>
                     <option value="Nairobi">Nairobi</option>
                     <option value="Strathmore">University</option>
                    
                   </select>
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
		
</body>
</html>