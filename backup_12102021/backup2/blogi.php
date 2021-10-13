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
	<style>
  
  *{
	  font-family:Verdana;
	  
  }
  
  .grid-container {
display: grid;
  grid-template-columns: auto auto auto;
  padding: 10px;
  
  /*11102021*/
  width:50%;
}
.grid-item {
  /*padding: 20px;*/
  font-size: 16px;
 /* text-align: center;*/
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #F2F2F2;
  font-family: 'Open Sans', sans-serif;
}

/* START MENU BAR */
.content {
  padding: 0 20px;
}

header {
  width: 100%;
  background-color: #2F2F2F;
  position: fixed;
  z-index: 999;
}

.logo {
  color: #5FC0DC;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 36px;
  font-weight: bold;
}

.toggler {
  color: #5FC0DC;
  cursor: pointer;
  position: absolute;
  top: 8px;
  right: 50px;
}

/* START NAVIGATION */
nav {
  width: 100%;
  display: none;
}

nav ul {
  list-style: none;
}

nav ul li a {
  text-decoration: none;
  color: #F2F2F2;
  font-size: 18px;
  line-height: 40px;
  transition: 0.3s ease-out;
}

nav ul li a:hover {
  color: #5FC0DC;
}

.active {
  color: #5FC0DC;
}

.side-nav {
  text-align: center;
}

.side-nav a {
  text-decoration: none;
  color: #5FC0DC;
  padding-right: 15px;
  line-height: 40px;
}

/* END NAVIGATION */
section {
  margin-top: 500px;
  text-align: center;
  font-size: 10px;
  color: #2F2F2F;
  margin-bottom: 20px;
}

section:after {
  content: 'Jan/2018';
  font-size: 12px;
  font-weight: bold;
}

#info {
	/*11102021*/
  padding-top: 75px; /*200px;*/
  text-align: center;
  color: #5FC0DC;
}

@media screen and (min-width: 872px) {
  
  .content {
    padding: 0 50px;
  }
  
  .toggler {
    display: none;
  }
  
  nav {
    display: inline-block !important; /* prevent the nav to hide when resize */
    position: relative;
    width: auto;
    float: right;
    padding: 5px 0;
  }
 
  nav ul {
    float: left;
  }
  
  nav ul li {
    display: inline-block;
    padding-right: 20px;
  }
  
  .side-nav {
   float: right;
  }
}



	</style>
	
	
<script>


function writeMsg() {

/*document.getElementsByClassName("demo").innerHTML = '<form action="" method="get"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';*/
/*let i=0;
document.getElementsByClassName("demo")[i].innerHTML='<form action="action2.php" method="post"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';

i=i+1;

*/

}

$(function() {
	$('.toggler').on('click', function() {
		$('nav').slideToggle(500);
  });
});


</script>

	
	
  </head>

<body>
<?php /*include("./config/db.php");*/ ?>
<?php include('login.php'); /*include('./controllers/login.php');*/ ?>

<header> 
  <div class="content">
    
    <a class="logo" href="#">Logo</a>
    <div class="toggler"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    
    <!-- Start Navigation -->
    <nav>
      <ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">Accomodation</a></li>
			<li><a href="logout.php">Kirjaudu ulos</a></li>
				<li><a href="rekisteroidy.php">Rekisteröidy</a></li>
				<li><a href="kirjaudu.php">Kirjaudu</a></li>
				<li><a href="blogi.php">Blogi</a></li>
			</ul>
				
      <!-- Side navigation on desktop -->
			<div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
	</nav>
    
  </div> 
</header>

<h1 id="info">
</h1>
<!-- 
<section>
  <h1>Mônica Saturno Busatta</h1>
</section> -->

<!-- https://s.cdpn.io/6859/iphone.png -->




<div style="margin: auto;width: 50%;"/>


<h1>Blogi</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam risus, consectetur pharetra mattis hendrerit, placerat at lorem. Maecenas molestie erat quis orci blandit accumsan. Fusce nec blandit metus. Donec et velit cursus, gravida lectus quis, suscipit tortor. Proin non vehicula est, id interdum mauris. Nunc eu nibh sapien. Vestibulum risus ante, mollis ac sodales et, laoreet in felis. Suspendisse dolor est, tempus ut accumsan nec, sollicitudin ut felis. Praesent ut risus suscipit, sollicitudin sapien ut, consectetur lectus. Suspendisse laoreet massa sem, accumsan tristique velit vestibulum eget. Quisque molestie leo nec fermentum mattis. Vivamus a pretium risus, ac varius risus. Nulla imperdiet dignissim feugiat. Sed rutrum hendrerit ex, vulputate commodo felis malesuada ut. Cras commodo porttitor sollicitudin.</p>


<h2>Vastaa</h2>
<form action="" method="post">
Kommentti<br><textarea name="kommentti" rows="4" cols="50"></textarea>
<div class="grid-container">

<div class="grid-item">Nimi*<br><input size="10"></div>
<div class="grid-item">Sähköpostiosoite*<br><input size="10"></div>

<div class="grid-item">Kotisivu<br><input size="10"></div><br>
</div>
<div class="grid-item"><button type="submit" name="lisaa" value="lisaa" class="button">Lähetä</button></div>

</form>


	<!-- <a href="#" onclick="writeMsg();">Uusi kysymys</a> -->

<?php



$sql = "SELECT id, kommentti from kommentit";
$result = $connection->query($sql);

// Associative array
/*foreach($result as $row){
printf ("%s (%s)\n", $row["id"], $row["kommentti"]);
echo "<br>";
}*/

foreach($result as $row){
printf ("%s\n", $row["kommentti"]);
echo "<br>";
}

// Free result set
/*$result -> free_result();

$mysqli -> close();
*/






$kommentti=null;

if(isset($_POST['kommentti'])){
$kommentti= $_POST['kommentti'];

$sql = "INSERT INTO kommentit (kommentti) VALUES ('$kommentti')";

if ($connection->query($sql) === TRUE) {
	/* 11102021 */
  /*echo "New record created successfully";*/
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

}

echo $kommentti;

?>

<div class="demo" style="margin-bottom:150px;"></div>

<!--<h2>Esitä vastaus</h2>-->
<?php /*$x=true;
$apu="";
if(isset($_GET['lisaa']))
$apu=$_GET['lisaa'];
*/
//if ($apu){
	
	//if($apu==null || isset($apu)){
	
	

	?>


	<?php
	//$x=false;
	//$apu.=$apu;
	
//}
//}

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