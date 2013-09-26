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
BigCommerce_Api::failOnError(true);
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
POST:</br>
<?php pre_print_r($_POST); ?>

</br></br></br></br>
<form action="test_A.php" method="POST">
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
<input type="hidden" name="mode" value="open" />'
<input type="submit" value="Open"></input>
</form>
</br></br>

<?php
if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
	
	if ( isset($_POST['mode']) ) { $mode = $_POST['mode']; }
	else { $mode = ""; }
	
	if ( $mode == "open" ) {
		$id = $_POST['custy'];
		$custy = BigCommerce_Api::getCustomer($id);
		$a = (array)$custy;
		$b = array_shift($a);
		$c = (array)$b;
		$c['method']='POST'; $c['action']='test_A.php';		
		$t = new Template("customer_form_template.php", $c);
		echo $t->render();
	} elseif ( $mode == "create" ) {
		echo "PROCESS CREATE NEW";		
		$keys = array(
			'company' => '',
			'first_name' => '',
			'last_name' => '',
			'email' => '',
			'phone' => '',
			'store_credit' => '',
			//'customer_group_id' => '',
			'notes' => '',
			'password' => ''
		);
		$for_new = array_intersect_key($_POST, $keys);
		pre_print_r($for_new);		
		echo 'new: '.BigCommerce_Api::createResource('/customers',$for_new);
	} elseif ( $mode == "show" ) {
		echo '??';
	} else {
		echo '??';
	}
		
	?>
<?php } else { ?>
	<?php
	$vars = array(
		'method' => 'POST',
		'action' => 'test_A.php',
		'submit_val' => 'Create New',
		'mode' => 'create'
	);
	$t = new Template( "customer_form_template.php", $vars );
	echo $t->render();
	?>
<?php } ?>  
</div>




</body>
</html>
