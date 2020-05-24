<div id="main">
<p>Thoughts:</p>
<p>For the most part BigCommerce_Api contains 6 function types:</p>
<ol><li>get-multiple</li><li>count</li><li>get-single</li><li>create</li><li>update</li><li>delete</li></ol>
<p>It has a generic version of each: getCollection, getCount, getResource, createResource, updateResource, deleteResource.</p>
<p>Then it has specific versions (getXs, getXCount, getX, createX, updateX, deleteX) for X in the set of resources: </p>
<ul><li>Products</li><li>Categories</li><li>Brands</li></ul>
<p>There are then similar functions for the types Options, OptionValues, Orders,
Customers, Addresses, etc.. but the coverage gets spotty. Customer lacks Create, Delete, 
and Update, for instance.</p>
<p>Can the generic version be used to Create/Delete/Update Customers?</p>
<p>Falling outside of this scheme entirely, BigCommerce_Api's remaining functions are:<p>
<ul>
<li>configure</li><li>failOnError</li><li>useXml</li><li>verifyPeer</li>
<li>useProxy</li><li>getLastError</li><li>getTime</li><li>getRequestsRemaining</li>
</ul>
</div>
