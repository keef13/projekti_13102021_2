<?php include('./rekisteroidy/controllers/register.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Blogi</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	
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
			<div class="side-nav">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
	</nav>
    
  </div> 
</header>


<div style="margin: auto;width: 50%;"/> 
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
                        <label>Etunimi</label><br>
                        <input type="text" class="form-control" name="firstname" id="firstName" required />

                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Sukunimi</label><br>
                        <input type="text" class="form-control" name="lastname" id="lastName" required />

                        <?php echo $l_NameErr; ?>
                        <?php echo $lNameEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" class="form-control" name="email" id="email" required />

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Puh.</label><br>
                        <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" required />

                        <?php echo $_mobileErr; ?>
                        <?php echo $mobileEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Salasana</label><br>
                        <input type="password" class="form-control" name="password" id="password" required />

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Rekisteröidy
                    </button>
                </form>
            </div>
        </div>
    </div>
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