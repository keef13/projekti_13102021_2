<?php include('./rekisteroidy/controllers/register.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Neilikka</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

$(function() {
	$('.toggler').on('click', function() {
		$('nav').slideToggle(500);
  });
});


</script>
	
	
  </head>
<!-- kommentti 123 2 -->
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
				<li><a href="rekisteroidy.php">Rekisteröidy</a></li>
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
<br><br><br><br><br>
<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Rekisteröidy</h3>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                    <div class="form-group">
                        <label>Etunimi</label>
                        <input type="text" class="form-control" name="firstname" id="firstName" />

                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Sukunimi</label>
                        <input type="text" class="form-control" name="lastname" id="lastName" />

                        <?php echo $l_NameErr; ?>
                        <?php echo $lNameEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" />

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Puh.</label>
                        <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />

                        <?php echo $_mobileErr; ?>
                        <?php echo $mobileEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Salasana</label>
                        <input type="password" class="form-control" name="password" id="password" />

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Rekisteröidy
                    </button>
                </form>
            </div>
        </div>
    </div>

<script>
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 
	</script>
</body>
</html>