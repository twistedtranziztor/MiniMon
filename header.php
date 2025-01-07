<?php
session_start();
?>

<?php require_once("version.php"); ?>

<?php 
	if(!$_SESSION['user'])
	{
		header("Location: ./index.php");
	}
?>

<div class="header">
<h1>MiniMon <?php echo VERSION; ?></h1>
</div>

