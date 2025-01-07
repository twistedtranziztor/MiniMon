<!DOCTYPE html>
<html>
	<?php include "head.php"; ?>
	<?php header("refresh: 5"); ?>
	<body>
	<?php include "header.php";?>
	<?php include "nav_menu.php";?>
	<div class="content">
		<p><?php echo "Hostname: ".shell_exec('hostname')."<br>";
		echo "Host cuurent time: ".date("Y-m-d H:m:s")."<br>";
		$uptime = shell_exec('uptime -s');
		echo "Host up since: "."<pre>$uptime</pre>"."<br>"; ?> 
		<?php $curr_users = shell_exec('w');
                echo "<pre>$curr_users</pre>"; ?>
	</div>
	</body>
</html>
