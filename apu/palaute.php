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
  
  /*11112021*/
  width:400px;
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
  padding-top: 200px;
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
<?php include("./config/db.php"); ?>


<header> 
  <div class="content">
    
    <a class="logo" href="#">Logo</a>
    <div class="toggler"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
    
    <!-- Start Navigation -->
    <nav>
      <ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">Accomodation</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Reservations</a></li>
				<li><a href="#">Contact</a></li>
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

<h1 id="info"><!-- Resize and Scroll the Page -->
</h1>
<!-- 
<section>
  <h1>Mônica Saturno Busatta</h1>
</section> -->

<!-- https://s.cdpn.io/6859/iphone.png -->




<div style="margin: auto;width: 50%;"/>

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