<?php

	require_once('app/view/gate/lib/nusoap.php');
		$sresult = mysql_query("SELECT price FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'"); 
		$sum = 0;
		while ($row = mysql_fetch_array($sresult, MYSQL_NUM)) { 
			$sum += $row[0]; 
		} 
	$MerchantID = $zf_api;
	$Amount = $sum; //Amount will be based on Toman
	$Authority = $_GET['Authority'];
	
	if($_GET['Status'] == 'OK'){
		// URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
		$client = new nusoap_client('https://de.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl'); 
		$client->soap_defencoding = 'UTF-8';
		$result = $client->call('PaymentVerification', array(
															array(
																	'MerchantID'	 => $MerchantID,
																	'Authority' 	 => $Authority,
																	'Amount'	 	 => $Amount
																)
															)
		);
		
		if($result['Status'] == 100){
						mysql_query("UPDATE `zf_prices` SET `type`='payed',`trcode`=$result[RefID] WHERE `session`='$zf_hash' AND `type`='nopay'");
			header("Location: ?page=zfpr&prs=yes&payresult=$result[RefID]");
		} else {
			header("Location: ?page=zfpr&prs=no&payresult=$result[Status]");
		}

	} else {
		header("Location: ?page=zfpr&prs=canceled&payresult=canceled");
	}
	

?>
