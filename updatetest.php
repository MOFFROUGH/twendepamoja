
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
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
           <button type="post" class="col-sm-offset-2 btn btn-success col-sm-10 center" name="update">Update</button>
           </div>
           <div class="clearfix"></div>
  
        </div>
</form>

 <?php
if (isset($_POST['update'])) {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    //$email = $_POST['email'];
    //$id=$_POST['id'];
    $location = $_POST['location'];
        $time = $_POST['time'];
        //$space = $_POST['space'];
        if ($location ==null || $time ==null) {
            echo' <div class="alert alert-block alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Fill all the fields and try again.  </div>';}else {
              $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    $sql = "UPDATE traveldetails SET location='$location',time='$time',Spaces=Spaces-1 WHERE email='mk@c.com'";
    mysql_select_db('twendepamoja');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
    die('Could not update data: ' . mysql_error());
    }
    echo "Updated data successfully\n";
    mysql_close($conn);
            }
    
}
?>

 </body>
 </html>