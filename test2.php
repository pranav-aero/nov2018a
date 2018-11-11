<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$senderid= 'HDFCBK';
$message = "Dear Customer, you have paid Rs.120.00 via your Paytm bank account XXXXXX4294 at Paytm on 31-01-2018 at 12:40:24. Updated balance: 1607.35. Queries? Call us at 011-33996699
";
$pregMatch = preg_match('$'."(?:0|[1-9]\d*)(?:\.(?!.*000)\d+)?".'$', $message, $matches,PREG_OFFSET_CAPTURE);echo '<pre>';
print_r($matches);exit;




