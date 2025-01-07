<!DOCTYPE html>
<html>
	<?php include "head.php"; ?>
	<?php header("refresh: 5"); ?>
	<body>
	<?php include "header.php"; ?>
	<?php include "nav_menu.php"; ?>
	<div class="content">
		<?php $output = shell_exec('mpstat -P ALL');
                echo "<pre>$output</pre>"; ?>
                <?php $proc_cpu = shell_exec('ps aux --sort=-pcpu | head -11');
                echo "<pre>$proc_cpu</pre>"; ?>
                <?php $proc_mem = shell_exec('ps aux --sort=-pmem | head -11');
                $proc_mem = preg_replace("/</"," ",$proc_mem);
                echo "<pre>$proc_mem</pre>"; ?></p>
        </div>
        </body>
</html>

