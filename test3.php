<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$senderid= 'Paytm';
$message = "Dear SBI UPI User, You're a/c no. XXXXXX0531 is credited with INR 10.00 on 2018-03-15 02:54:58 PM by GOOGLEPAY (UPI Ref no 807414698333).
";

$pregMatch = preg_match('$'."no. X+(\\d{4}) (.*) ([\\d,]+\\.?\\d{0,2}) on".'$', $message, $matches);echo '<pre>';
print_r($matches);exit;


//([\\d,]+\\.?\\d{0,2}) via  X+(\\d{4}) at (.*) balance: +([\\d,]+\\.?\\d{0,2})

