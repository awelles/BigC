<div id="header">
<a href="aaron3.php">home</a> . 
<?php
$ping = BigCommerce_Api::getTime();
if ($ping) { echo "Time: ".$ping->format('H:i:s'); }

?>
</div>
