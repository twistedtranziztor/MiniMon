<!DOCTYPE html>
<html>
	<?php include "head.php"; ?>
	<?php header("refresh: 5"); ?>
	<body>
	<?php include "header.php"; ?>
	<?php include "nav_menu.php"; ?>
	<div class="content">
	<?php $output = shell_exec('lsblk');
        echo "<pre>$output</pre>"; ?>
	<?php $usage = shell_exec('df -h');
        echo "<pre>$usage</pre>"; ?>
	 <?php $iostat = shell_exec('iostat');
        echo "<pre>$iostat</pre>"; ?>       
	</div>
        </body>
</html>

