<?php
 $txt='XX9944';

  $re1='(XX9944)';	# Variable Name 1
  $re2='(X)';	# Any Single Character 1
  $re3='(X)';	# Any Single Word Character (Not Whitespace) 1

  if ($c=preg_match_all ("/".$re1.$re2.$re3."/is", $txt, $matches))
  {
      echo 'll';
      $var1=$matches[1][0];
      $c1=$matches[2][0];
      $w1=$matches[3][0];
      print "($var1) ($c1) ($w1) \n";
  }
  echo 'll';
