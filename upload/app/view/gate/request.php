<?php
	require_once('app/view/gate/lib/nusoap.php');
		$sresult = mysql_query("SELECT price FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'"); 
		$sum = 0;
		while ($row = mysql_fetch_array($sresult, MYSQL_NUM)) { 
			$sum += $row[0]; 
		} 
		$zg = $_GET['zg'];
		
		$resultemail = mysql_query("SELECT * FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'");
		while($row = mysql_fetch_array($resultemail)){ $zfuseremail = $row[email]; }
	$MerchantID = $zf_api;  //Required
	$Amount = $sum; //Amount will be based on Toman  - Required
	$Description = "پرداخت مبلغ $sum با احتساب $_GET[ft] فاکتور";  // Required
	$Email = $zfuseremail; // Optional
	$Mobile = ''; // Optional
	$CallbackURL = $zf_address . '?page=zfvp';  // Required
	
	
	// URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
	$client = new nusoap_client('https://de.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl'); 
	$client->soap_defencoding = 'UTF-8';
	$result = $client->call('PaymentRequest', array(
													array(
															'MerchantID' 	=> $MerchantID,
															'Amount' 		=> $Amount,
															'Description' 	=> $Description,
															'Email' 		=> $Email,
															'Mobile' 		=> $Mobile,
															'CallbackURL' 	=> $CallbackURL
														)
													)
	);
	
	//Redirect to URL You can do it also by creating a form
	if($result['Status'] == 100)
	{
		Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result['Authority'].'/'.$zg);
	} else {
		echo'ERR: '.$result['Status'];
	}
?>
