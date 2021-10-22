<?php
/* Suojattujen sivujen alkuun */
if (!session_id()) session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION['next_page'] = $_SERVER['PHP_SELF']; 
    header("location: kirjaudu.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Blogi</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link rel="stylesheet" href="https://code.jquery.com/jquery-3.2.1.min.js">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/245137f78c.js">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
<script>


function writeMsg() {


}

$(function() {
	$('.toggler').on('click', function() {
		$('nav').slideToggle(500);
  });
});


</script>

	
	
  </head>

<body>

<?php include('login.php'); ?>

<header> 
  <div class="content">
    
    <a class="logo" href="#">Blogi</a>
    <div class="toggler"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    
    <!-- Start Navigation -->
    <nav>
      <ul>
				<li><a href="index.php">Aloitus</a></li>
				<li><a href="palaute.php">Palaute</a></li>
			<li><a href="rekisteroidy/logout.php">Kirjaudu ulos</a></li>
				<li><a href="rekisteroidy.php">Rekisteröidy</a></li>
				<li><a href="kirjaudu.php">Kirjaudu</a></li>
				<li><a href="blogi.php">Blogi</a></li>
			</ul>
				
      <!-- Side navigation on desktop -->
		<!--	<div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div> -->
	</nav>
    
  </div> 
</header>


<br><br><br><br>


<!-- https://s.cdpn.io/6859/iphone.png -->




<div style="margin: auto;width: 50%;"/>


<h1>Blogi</h1>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam risus, consectetur pharetra mattis hendrerit, placerat at lorem. Maecenas molestie erat quis orci blandit accumsan. Fusce nec blandit metus. Donec et velit cursus, gravida lectus quis, suscipit tortor. Proin non vehicula est, id interdum mauris. Nunc eu nibh sapien. Vestibulum risus ante, mollis ac sodales et, laoreet in felis. Suspendisse dolor est, tempus ut accumsan nec, sollicitudin ut felis. Praesent ut risus suscipit, sollicitudin sapien ut, consectetur lectus. Suspendisse laoreet massa sem, accumsan tristique velit vestibulum eget. Quisque molestie leo nec fermentum mattis. Vivamus a pretium risus, ac varius risus. Nulla imperdiet dignissim feugiat. Sed rutrum hendrerit ex, vulputate commodo felis malesuada ut. Cras commodo porttitor sollicitudin.</p>

<br>
<!--<h2>Vastaa</h2>-->
<form action="" method="post">
<strong>Kommentoi:</strong><br><textarea name="kommentti" rows="4" cols="50"></textarea>
<div class="grid-container">

</div>
<div class="grid-item"><button type="submit" name="lisaa" value="lisaa" class="button">Lähetä</button></div>

</form>


	<!-- <a href="#" onclick="writeMsg();">Uusi kysymys</a> -->

<?php



$kommentti=trim($_POST['kommentti']);

/* 17102021 */ 
$kommentti=htmlspecialchars($kommentti);

if(isset($_POST['kommentti']) and !empty($_POST['kommentti'])){
$kommentti= $_POST['kommentti'];



$id=$_SESSION['id'];
/* 17102021 */
date_default_timezone_set("Europe/Helsinki");
$timestamp = date("Y-m-d H:i:s");
$sql = "INSERT INTO kommentit (kommentti, id_user, timestamp) VALUES ('$kommentti', '$id', '$timestamp')";

if ($connection->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}


//$connection->close();

}

$nimi=null;
if(isset($_POST['nimi']))
$nimi=$_POST['nimi'];
$email=null;
if(isset($_POST['email']))
$email=$_POST['email'];
$sql = "INSERT INTO users (firstname, email) VALUES ('$nimi','$email')";
//$result = $connection->query($sql11);



//echo $kommentti;



//$sql = "SELECT firstname, kommentti from kommentit inner join users id_user=id";
$sql2 = "SELECT kommentti from kommentit";

  


// 12102021
$sql2 = "SELECT Users.firstname, Users.lastname, Kommentit.kommentti, Kommentit.timestamp FROM Users RIGHT JOIN Kommentit ON Kommentit.id_user = Users.id";
$result2 = $connection->query($sql2);
	 ?>
<table>
<?php

while($row2 = $result2->fetch_assoc()) {
	
	$date=date_create($row2["timestamp"]);
$date2=date_format($date,"d.m.Y H:i:s"); 
//$date2=date("d.m.Y H:i:s", $date);	


		//printf ("%s %s %s\n", $row2["firstname"], $row2["lastname"], $row2["kommentti"]);
		?><tr><td><div style="border:1px solid #000;font-weight: bold;"><?php echo $row2["firstname"]." ".$row2["lastname"]." ". $date2 ?><br><?php echo $row2["kommentti"] ?></div></td></tr>
		<!--<tr><td><?php /*echo $row2["kommentti"]*/ ?></td></tr>-->
	
		
		<?php
		/*echo $row2["firstname"] . " ".$row2["lastname"]; ?> <br>
		<?php		echo $row2["kommentti"]; ?>
		
		<br>*/
	  }
	  ?>
</table>
<?php
$connection->close();


?>

<div class="demo" style="margin-bottom:150px;"></div>




	<?php
	

?>
</div>

<!-- https://s.cdpn.io/6859/iphone.png -->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://use.fontawesome.com/245137f78c.js'></script>
      <script id="rendered-js" >
$(function () {
  $('.toggler').on('click', function () {
    $('nav').slideToggle(500);
  });
});
//# sourceURL=pen.js
    </script>
</body>
</html>