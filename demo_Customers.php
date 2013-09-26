<?php
require_once 'aaron_functions.php';
require_once 'BigCommerce/Api.php';
require_once 'includes/template.php';

$store_url = "https://store-70b1c.mybigcommerce.com";
$username = "";
$api_key = "";
BigCommerce_Api::configure(array(
    'store_url' => $store_url,
    'username'  => $username,
    'api_key'   => $api_key
));
BigCommerce_Api::verifyPeer(false);
$ping = BigCommerce_Api::getTime();
?>
<!DOCTYPE html>
<html>
<head>
<title>Aaron 3</title>
<link type="text/css" rel="stylesheet" media="all" href="aaron.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'links.php'; ?>

<div id="main">
</br></br>
<form action="demo_Customers.php" method="POST">
<select name="custy">
<?php
$coll=BigCommerce_Api::getCustomers();
foreach($coll as $c) {
	$id = $c->id;
	$first = $c->first_name;
	$last = $c->last_name;
	$name = $first." ".$last;
	echo '<option value="'.$id.'">'.$name.'</option>';
}
?>
</select>
<input type="submit"></input>
</form>
</br></br>
<?php
if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) { ?>
	<?php
	$id = $_POST['custy'];
	$custy = BigCommerce_Api::getCustomer($id);
	//pre_print_r($custy);
	cust_html($custy);
	?>
	
<?php } else { ?>
	
<?php } ?>  
</div>

</body>
</html>
