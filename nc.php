<?php
echo shell_exec("nc -vz -w 5 0.tcp.eu.ngrok.io 16586 2>&1");
?>
