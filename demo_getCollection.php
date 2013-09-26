<?php
require_once 'aaron_functions.php';
require_once 'BigCommerce/Api.php';
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
$Rs = array(
'Brands',
'Categories',
'Countries',
'States',
'Customers',
'Addresses',
'Options',
'Option Values',
'Option Set',
'Option Set Options',
'Orders',
'Coupons',
'Order Products',
'Shipments',
'Shipping Addresses',
'Order Statuses',
'Products',
'Bulk Discount Rules',
'Configurable Fields',
'Custom Fields',
'Images',
'Product Options',
'Rules',
'SKU',
'Videos',
'Request Log',
'Time');
?>
<!DOCTYPE html>
<html>
<head>
<title>Aaron 3</title>
<link type="text/css" rel="stylesheet" media="all" href="aaron.css">
<script src="jquery-1.7.2.min.js"></script>
<script src="collapsiblePanel.js"></script>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'links.php'; ?>

<div id="main">

<div class="function">
<pre>/**
 * Get a collection result from the specified endpoint.
 *
 * @param string $path api endpoint
 * @param string $resource resource class to map individual items
 * @param array $fields additional key=>value properties to apply to the object
 * @return mixed array|string mapped collection or XML string if useXml is true
 */</pre><span class="function-name">
getCollection($path, $resource='Resource')</span>

<div class="function">
<pre>
$coll = BigCommerce_Api::getCollection("/customers/1");
pre_print_r($coll);
</pre>
</div>

<div class="collapsibleContainer" title="/customers/1 Result">
<?php
$coll = BigCommerce_Api::getCollection("/customers/1");
pre_print_r($coll);
?>
</div>

<?php foreach ($Rs as $r) { ?>
<div class="function">
<pre>
$coll = BigCommerce_Api::getCollection("/<?php echo $r; ?>");
pre_print_r($coll);
</pre>
</div>

<div class="collapsibleContainer" title="<?php echo $r; ?> Result">
<?php
$coll = BigCommerce_Api::getCollection("/$r");
pre_print_r($coll);
?>
</div>
<?php } ?>

</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $(".collapsibleContainer").collapsiblePanel();
    });
</script>
</body>
</html>
