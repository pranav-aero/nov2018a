<?php
//message data
$senderid= 'PAYTMB';
$message = "Dear Customer, you have paid Rs.120.00 via your Paytm bank account XXXXXX4294 at Paytm on 31-01-2018 at 12:40:24. Updated balance: 1607.35. Queries? Call us at 011-33996699
";
echo '<pre>';
preg_match("/\\*(.*?)\\./", $message, $match);
//print_r($match);exit;
if(count($match)>0){
	preg_match('/[0-9][0-9]*/', $match[1], $getNumber);
	print_r($getNumber);
	preg_match('/[a-z\s-][A-Z\s-]*/i', $match[1], $getString);
	//print_r($getNumber);
}
$json = json_decode(file_get_contents('testjson.json'));
$rulecount = count($json->rules);
//dd($rulecount);exit;
for($rule=0; $rule<$rulecount; $rule++){
	if(in_array(strtoupper($senderid),$json->rules[$rule]->senders)){
		$count_patterns = count($json->rules[$rule]->patterns);
		if($count_patterns>0){
			for($patterns=0; $patterns<$count_patterns; $patterns++){
				$thispattern = $json->rules[$rule]->patterns[$patterns]->regex;
				$pregMatch = preg_match('$'."([\\d,]+\\.?\\d{0,2}) via (.*) X+(\\d{4}) at (.*) balance: +([\\d,]+\\.?\\d{0,2})".'$', $message, $matches);
			print_r($matches);
				if(count($matches)){
					echo '<br/>';print_r($matches);
					$thispattern = $json->rules[$rule]->patterns[$patterns]->pattern_UID;
					$dataFieldObject = $json->rules[$rule]->patterns[$patterns]->data_fields;
					echo '<br/>------------data-------<br/>';
					echo 'Sender Name = '.$json->rules[$rule]->name;
					echo '<br/>';
					echo 'Amount = '.$matches[$json->rules[$rule]->patterns[$patterns]->data_fields->amount->group_id];
					echo '<br/>';
					echo 'Account Balance = '.$matches[$json->rules[$rule]->patterns[$patterns]->data_fields->account_balance->group_id];
					echo '<br/>';
					echo 'Account Type = '.$json->rules[$rule]->patterns[$patterns]->account_type;
					echo '<br/>';
					//Pan
					if(property_exists($dataFieldObject->pan, 'group_id' )){
						echo 'Account Name = '.$matches[$json->rules[$rule]->patterns[$patterns]->data_fields->pan->group_id];
					}else{
						echo 'Account Name= '.$json->rules[$rule]->patterns[$patterns]->data_fields->pan->value;
					}
					echo '<br/>';
					//Pos
					if(property_exists($dataFieldObject->pos, 'group_id' )){
						echo 'Merchent Name = '.$matches[$json->rules[$rule]->patterns[$patterns]->data_fields->pos->group_id];
					}else{
						echo 'Merchent Name = '.$json->rules[$rule]->patterns[$patterns]->data_fields->pos->value;
					}
					

					echo '<br/>';
					echo 'sms_type = '.$json->rules[$rule]->patterns[$patterns]->sms_type;
					echo '<br/>';
					if(property_exists($dataFieldObject, 'statement_type' )){
						echo 'statement_type = '.$json->rules[$rule]->patterns[$patterns]->data_fields->statement_type;
						echo '<br/>';
					}
					if(property_exists($dataFieldObject, 'transaction_type' )){
						echo 'transaction_type = '.$json->rules[$rule]->patterns[$patterns]->data_fields->transaction_type;
						echo '<br/>';
					}
					if(property_exists($dataFieldObject, 'status' )){
						echo 'status = '.$json->rules[$rule]->patterns[$patterns]->data_fields->status;
						echo '<br/>';
					}
					echo 'Pattern Uid = '.$json->rules[$rule]->patterns[$patterns]->pattern_UID;
					echo '<br/>';
					echo '------------end--------<br/>';

					echo '========<br/>';break;
				}
				
			}	
		}
	}
}

//check this message for error 
//Avbl Bal as on 29-Aug-2016 08:31:36 in your A/C. No.XX9999 is INR 6666, Tot. avbl bal (including linked deposits and Limit) is INR 66660
?>