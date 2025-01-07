<!DOCTYPE html>
<html>
	<?php include "head.php"; ?>
	<?php header("refresh: 5"); ?>
	<body>
	<?php include "header.php"; ?>
	<?php include "nav_menu.php"; ?>
	<div class="content">
		<?php $output = shell_exec('echo "php template');
                echo "<pre>$output</pre>"; ?>
        </div>
        </body>
</html>

