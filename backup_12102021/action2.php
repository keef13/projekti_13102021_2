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
  
	</script>
	
	
<script>




function writeMsg() {

/*document.getElementsByClassName("demo").innerHTML = '<form action="" method="get"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';*/
let i=0;
document.getElementsByClassName("demo")[i].innerHTML='<form action="action2.php" method="post"><textarea name="kjav3" rows="4" cols="50"></textarea><br><button type="submit" name="lisaa" value="lisaa">Lähetä</button></form>';

i=i+1;








}</script>

	
	
  </head>

<body>

<div style="clear:both"><?php echo $_POST['kjav3']?></div>;

	<a href="#" onclick="writeMsg()">Uusi kysymys</a>


<div class="demo"></div>

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



</body>
</html>