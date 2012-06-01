<?php
	$defaultVars = array(
"id"  => "",
"company" => "",
"first_name"  => "",
"last_name"  => "",
"email"  => "",
"phone"  => "",
"date_created"  => "",
"date_modified"  => "",
"store_credit"  => "",
"registration_ip_address"  => "",
"customer_group_id"  => "",
"notes" => "",
"submit_val" => "",
"mode" => "show"
	);
extract($defaultVars,EXTR_SKIP);
$submit = '<p><input type="hidden" name="mode" value="'.$mode.'" />';
if ( $submit_val == "" ){  }
else {  $submit .= '<input type="submit" value="'.$submit_val.'" />'; }
pre_print_r($_SERVER['PHP_SELF']);
?>

<div class="customer_form_template" >
<form action="<?php echo $action; ?>" method="<?php echo $method; ?>">
<p>id : <input type="text" name="id" readonly value="<?php echo $id; ?>"/></p>
<p>company : <input type="text" name="company" value="<?php echo $company; ?>" /></p>
<p>first_name : <input type="text" name="first_name" value="<?php echo $first_name; ?>"/></p>
<p>last_name : <input type="text" name="last_name" value="<?php echo $last_name; ?>"/></p>
<p>email : <input type="text" name="email" value="<?php echo $email; ?>"/></p>
<p>phone : <input type="text" name="phone" value="<?php echo $phone; ?>"/></p>
<p>date_created : <input type="text" name="date_created" value="<?php echo $date_created; ?>"/></p>
<p>date_modified : <input type="text" name="date_modified" value="<?php echo $date_modified; ?>"/></p>
<p>store_credit : <input type="text" name="store_credit" value="<?php echo $store_credit; ?>"/></p>
<p>registration_ip_address : <input type="text" name="registration_ip_address" value="<?php echo $registration_ip_address; ?>"/></p>
<p>customer_group_id : <input type="text" name="customer_group_id" value="<?php echo $customer_group_id; ?>"/></p>
<p style="vertical-align:top">notes : <textarea name="notes"><?php echo $notes; ?></textarea></p>
<?php if ($mode=='create') { ?>
<p>password : <input type="text" name="password" value="" /></p>
<?php } ?>
<?php echo $submit; ?>

</div>