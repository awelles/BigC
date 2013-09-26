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
<div id="header">
<?php
$ping = BigCommerce_Api::getTime();
if ($ping) { echo "Time: ".$ping->format('H:i:s'); }

?>
</div>
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
getCollection($path, $resource='Resource')

<?php foreach ($Rs as $r) { ?>
<div class="function">
<pre>
$coll = BigCommerce_Api::getCollection("/<?php echo $r; ?>");
pre_print_r($coll);
</pre>
</div>

<div class="collapsibleContainer" title="Result">
<?php
$coll = BigCommerce_Api::getCollection("/$r");
pre_print_r($coll);
?>
</div>
<?php } ?>

</div>




<div class="function">
<pre>/**
 * Configure the API client to throw exceptions when HTTP errors occur.
 *
 * Note that network faults will always cause an exception to be thrown.
 */</pre><span class="function-name">
failOnError($option=true)</span>
<pre>/**
 * Get error message returned from the last API request if
 * failOnError is false (default).
 *
 * @return string
 */</pre><span class="function-name">
getLastError()</div>



<div class="function">
<pre>/**
 * Get an instance of the HTTP connection object. Initializes
 * the connection if it is not already active.
 *
 * @return BigCommerce_Api_Connection
 */</pre><span class="function-name">
connection()</span>
</div>





<div class="function">
<pre>/**
 * Get a resource entity from the specified endpoint.
 *
 * @param string $path api endpoint
 * @param string $resource resource class to map individual items
 * @return mixed BigCommerce_ApiResource|string resource object or XML string if useXml is true
 */</pre><span class="function-name">
getResource($path, $resource='Resource')</div>

<div class="function">
<pre>/**
 * Get a count value from the specified endpoint.
 *
 * @param string $path api endpoint
 * @return mixed int|string count value or XML string if useXml is true
 */</pre><span class="function-name">
getCount($path)</span>
</div>

<div class="function">
<pre>/**
 * Send a post request to create a resource on the specified collection.
 *
 * @param string $path api endpoint
 * @param mixed $object object or XML string to create
 */</pre><span class="function-name">
createResource($path, $object)</span>
</div>

<div class="function">
<pre>/**
 * Send a put request to update the specified resource.
 *
 * @param string $path api endpoint
 * @param mixed $object object or XML string to update
 */</pre><span class="function-name">
updateResource($path, $object)</span>
</div>

<div class="function">
<pre>/**
 * Send a delete request to remove the specified resource.
 *
 * @param string $path api endpoint
 */</pre><span class="function-name">
deleteResource($path)</span>
</div>

<div class="function">
<pre>/**
 * Internal method to wrap items in a collection to resource classes.
 *
 * @param string $resource name of the resource class
 * @param array $object object collection
 * @return array
 */</pre><span class="function-name">
private static function mapCollection($resource, $object)</span>
</div>

<div class="function">
<pre>/**
 * Callback for mapping collection objects resource classes.
 *
 * @param stdClass $object
 * @return BigCommerce_Api_Resource
 */</pre><span class="function-name">
private static function mapCollectionObject($object)</span>
</div>

<div class="function">
<pre>/**
 * Map a single object to a resource class.
 *
 * @param string $resource name of the resource class
 * @param stdClass $object
 * @return BigCommerce_Api_Resource
 */</pre><span class="function-name">
private static function mapResource($resource, $object)</span>
</div>

<div class="function">
<pre>/**
 * Map object representing a count to an integer value.
 *
 * @param stdClass $object
 * @return int
 */</pre><span class="function-name">
private static function mapCount($object)</span>
</div>

<div class="function">
<pre>/**
 * Pings the time endpoint to test the connection to a store.
 *
 * @return DateTime
 */</pre><span class="function-name">
getTime()</span>
</div>

<div class="function">
<pre>/**
 * Returns the default collection of products.
 *
 * @param array $filter
 * @return mixed array|string list of products or XML string if useXml is true
 */</pre><span class="function-name">
getProducts($filter=false)</div>

<div class="function">
<pre>/**
 * Returns the total number of products in the collection.
 *
 * @return mixed int|string number of products or XML string if useXml is true
 */</pre><span class="function-name">
getProductsCount()

</div>

<div class="function">
<pre>/**
 * Returns a single product resource by the given id.
 *
 * @param int $id product id
 * @return BigCommerce_Api_Product|string
 */</pre><span class="function-name">
getProduct($id)

</div>

<div class="function">
<pre>/**
 * Create a new product.
 *
 * @param mixed $object fields to create
 */</pre><span class="function-name">
createProduct($object)</span>
</div>

<div class="function">
<pre>/**
 * Update the given product.
 *
 * @param int $id product id
 * @param mixed $object fields to update
 */</pre><span class="function-name">
updateProduct($id, $object)</span>
</div>

<div class="function">
<pre>/**
 * Delete the given product.
 *
 * @param int $id product id
 */</pre><span class="function-name">
deleteProduct($id)

</div>

<div class="function">
<pre>/**
 * Return the collection of options.
 *
 * @param array $filter
 * @return array
 */</pre><span class="function-name">
getOptions($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * Return the number of options in the collection
 *
 * @return int
 */</pre><span class="function-name">
getOptionsCount()</span>
</div>

<div class="function">
<pre>/**
 * Return a single option by given id.
 *
 * @param int $id option id
 * @return BigCommerce_Api_Option
 */</pre><span class="function-name">
getOption($id)</span>
</div>

<div class="function">
<pre>/**
 * Delete the given option.
 *
 * @param int $id option id
 */</pre><span class="function-name">
deleteOption($id)</span>
</div>

<div class="function">
<pre>/**
 * Return a single value for an option.
 *
 * @param int $option_id option id
 * @param int $id value id
 * @return BigCommerce_Api_OptionValue
 */</pre><span class="function-name">
getOptionValue($option_id, $id)</span>
</div>

<div class="function">
<pre>/**
 * Return the collection of all option values.
 *
 * @param mixed $filter
 * @return array
 */</pre><span class="function-name">
getOptionValues($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * The collection of categories.
 *
 * @param mixed $filter
 * @return array
 */</pre><span class="function-name">
getCategories($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * The number of categories in the collection.
 *
 * @return int
 */</pre><span class="function-name">
getCategoriesCount()</span>
</div>

<div class="function">
<pre>/**
 * A single category by given id.
 *
 * @param int $id category id
 * @return BigCommerce_Api_Category
 */</pre><span class="function-name">
getCategory($id)</span>
</div>

<div class="function">
<pre>/**
 * Create a new category from the given data.
 *
 * @param mixed $object
 */</pre><span class="function-name">
createCategory($object)</span>
</div>

<div class="function">
<pre>/**
 * Update the given category.
 *
 * @param int $id category id
 * @param mixed $object
 */</pre><span class="function-name">
updateCategory($id, $object)</span>
</div>

<div class="function">
<pre>/**
 * Delete the given category.
 *
 * @param int $id category id
 */</pre><span class="function-name">
deleteCategory($id)</span>
</div>

<div class="function">
<pre>/**
 * The collection of brands.
 *
 * @param mixed $filter
 * @return array
 */</pre><span class="function-name">
getBrands($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * The total number of brands in the collection.
 *
 * @return int
 */</pre><span class="function-name">
getBrandsCount()</span>
</div>

<div class="function">
<pre>/**
 * A single brand by given id.
 *
 * @param int $id brand id
 * @return BigCommerce_Api_Brand
 */</pre><span class="function-name">
getBrand($id)</span>
</div>

<div class="function">
<pre>/**
 * Create a new brand from the given data.
 *
 * @param mixed $object
 */</pre><span class="function-name">
createBrand($object)</span>
</div>

<div class="function">
<pre>/**
 * Update the given brand.
 *
 * @param int $id brand id
 * @param mixed $object
 */</pre><span class="function-name">
updateBrand($id, $object)</span>
</div>

<div class="function">
<pre>/**
 * Delete the given brand.
 *
 * @param int $id brand id
 */</pre><span class="function-name">
deleteBrand($id)</span>
</div>

<div class="function">
<pre>/**
 * The collection of orders.
 *
 * @param mixed $filter
 * @return array
 */</pre><span class="function-name">
getOrders($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * The number of orders in the collection.
 *
 * @return int
 */</pre><span class="function-name">
getOrdersCount()</span>
</div>

<div class="function">
<pre>/**
 * A single order.
 *
 * @param int $id order id
 * @return BigCommerce_Api_Order
 */</pre><span class="function-name">
getOrder($id)</span>
</div>

<div class="function">
<pre>/**
 * Delete the given order (unlike in the Control Panel, this will permanently
 * delete the order).
 *
 * @param int $id order id
 */</pre><span class="function-name">
deleteOrder($id)</span>
</div>

<div class="function">
<pre>/**
 * The list of customers.
 *
 * @param mixed $filter
 * @return array
 */</pre><span class="function-name">
getCustomers($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * The total number of customers in the collection.
 *
 * @return int
 */</pre><span class="function-name">
getCustomersCount()</span>
</div>

<div class="function">
<pre>/**
 * A single customer by given id.
 *
 * @param int $id customer id
 * @return BigCommerce_Api_Customer
 */</pre><span class="function-name">
getCustomer($id)</span>
</div>

<div class="function">
<pre>/**
 * A list of addresses belonging to the given customer.
 *
 * @param int $id customer id
 * @return array
 */</pre><span class="function-name">
getAddresses($id)</span>
</div>

<div class="function">
<pre>/**
 * Returns the collection of option sets.
 *
 * @param array $filter
 * @return array
 */</pre><span class="function-name">
getOptionSets($filter=false)</span>
</div>

<div class="function">
<pre>/**
 * Returns the total number of option sets in the collection.
 *
 * @return int
 */</pre><span class="function-name">
getOptionSetsCount()</span>
</div>

<div class="function">
<pre>/**
 * A single option set by given id.
 *
 * @param int $id option set id
 * @return BigCommerce_Api_OptionSet
 */</pre><span class="function-name">
getOptionSet($id)</span>
</div>

<div class="function">
<pre>/**
 * Status codes used to represent the state of an order.
 *
 * @return array
 */</pre><span class="function-name">
getOrderStatuses()</span>
</div>

<div class="function">
<pre>/**
 * The request logs with usage history statistics.
 */</pre><span class="function-name">
getRequestLogs()</span>
</div>

<div class="function">
<pre>/**
 * The number of requests remaining at the current time. Based on the
 * last request that was fetched within the current script. If no
 * requests have been made, pings the time endpoint to get the value.
 *
 * @return int
 */</pre><span class="function-name">
getRequestsRemaining()

</div>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $(".collapsibleContainer").collapsiblePanel();
    });
</script>
</body>
</html>
