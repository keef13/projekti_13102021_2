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
  <title>Neilikka</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
    /* testi */
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 

$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $("#myTopnav a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});
</script>
<style>
	.active { background-color: #fff; }
/* to override the existing css for "a" tag */
#myTopnav .active a{ color: #000; }
	</style>

	
	
  </head>
<body>
<img src="neilikka.jpg" id="logo">
<div class="topnav" id="myTopnav">
  <a href="index.html">Etusivu</a>
  <div class="dropdown">
    <button class="dropbtn"><a href="tuotteet.html">Tuotteet</a>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sisakasvit.html">Sisäkasvit</a>
      <a href="ulkokasvit.html">Ulkokasvit</a>
      <a href="tyokalut.html">Työkalut</a>
	  <a href="kasvien_hoito.html">Kasvien hoito</a>
    </div>
  </div>
  <a href="myymalat.html">Myymälät</a>
  
  <a href="tietoa_meista.html">Tietoa meistä</a>
<a href="ota_yhteytta.php">Ota yhteyttä</a>
  <a href="rekisteroidy.php">Rekisteröidy</a>
  <a href="kirjaudu.php">Kirjaudu</a>
  <a href="profiili.php">Profiili</a>
  <a href="ulos.php">Ulos</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 
<div class="center">
<h1>Ota yhteyttä</h1>
<form>
	    <fieldset>
			<legend>Yhteydenotto</legend>
			Nimi *:<br>
			<input type="text" name="nimi" size="20" maxlength="20" required> <br><br>
			
			
			Sähköposti *:<br>
			<input type="email" name="email" required placeholder="Enter a valid email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> <br><br>
			
			Aihe:<br>
			<select name="aihe">
			  <option>Kysymys tuotteista</option>
			  <option>Tilaus</option>
			  <option>Yhteydenottopyyntö</option>
			  <option>Muu</option>
			</select>
			<br><br>
			Viesti:<br>
			<textarea name="viesti" size="30" maxlength="500"></textarea>
			<br><br>
			<label class="container">Haluan tilata Puutarhaliike Neilikan uutiskirjeen
			<input type="checkbox">
			<span class="checkmark"></span>
			</label>
			<br><br>
			<input type="submit" value="Lähetä">
		</fieldset>
	  </form>
	  </div>
</body>
</html>