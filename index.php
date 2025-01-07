<?php
	session_start();
?>

<!DOCTYPE html>
<style>
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Minimon login</title>
</head> 
<body>
	<?php if(empty($_SESSION['user'])) : ?>
  		<div class="center">
  		<form action="login.php" method="post"> 
		<input type="text" name="login" /> 
		<br/>    
		<input type="password" name="password" /> 
    		<br/>
		<button type="submit">Log in</button>
  		</form>
  		</div>
	<?php else : ?>
		<?php header("Location: ./overview.php"); ?>	
 	<?php endif; ?>
</body>
</html>
