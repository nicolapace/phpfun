<?php
echo "<pre>";
echo "User: " . shell_exec("id") . PHP_EOL;
echo "Host: " . shell_exec("hostname") . PHP_EOL;
echo "PHP: " . PHP_VERSION . PHP_EOL;
echo "OS: " . shell_exec("uname -a") . PHP_EOL;
echo "</pre>";
?>
