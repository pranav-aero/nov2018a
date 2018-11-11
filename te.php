<?php

class animal {

    private $name;
    private $age;
    public static $id;

    public function __set($property, $value) {
        if ($property=="name" ){
            $this->name = $value;
            echo "suceesfully updated animal {$property} as " . $value."<br>";
            
        } else if($property=="age")  {
            $this->age=$value;
             echo "suceesfully updated animal {$property} as " . $value."<br>";
        }
    }

    function __get($name){
            echo "coming from get asking ".$name.$this->name;
           return $this->name;
        }
}

$dog = new animal();
$dog->name = 8;
$dog->name;
$str = "Hello world. It's a beautiful day.";
$ex= (explode(" ",$str));

foreach ($ex as $value){
    echo $value."<br>";
}
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);echo "<br>";
for($i=0;$i<10;$i++){
    $i .= rand(1,106660)."  ";
}
echo $i;
const i=1;
define('X',2123123);
echo "<br>"."defined X = ".X."<br>";

function table($it,$num){
    if($it>10){
        return FALSE;
    }
        else{
            echo $it * $num;
            echo "<br>";
            table(++$it, $num);
        }
    }
$it =1;
$num= 13;
table($it, $num);$arr = array(1, 2, 3);

//echo '<pre>';
print_r($arr);
echo '<pre>';

print_r($arr); 
 $defaultOptions = array( "red",  5,  "Default text");
    $customOptions = array( "blue",4,  "Custom text");
    $options = array_combine($customOptions,$defaultOptions);
    print_r($options);
    $i=12;
    if(isset($i)){
        echo 'set';
    }
 else {
        
echo 'not set';}
//echo $_SERVER["REMOTE_ADDR"];
//unlink($i);
//secho $i;
$a = '1';
$b = &$a;
$b = "123";
//define ('gr','eat');
////echo gr;
echo $a.", ".$b;
$re2=true;
echo $i=($re2)?'hello':'bye';
$input='12,34,56,1021,';
var_dump($input);
$ir = 016;
echo "<br>".$ir / 2;
echo array_sum(explode(',',$input));

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_merge($fname,$age);
print_r($c);

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
$sum=0;
  foreach ($cars as $key=> $car){
      echo $key."<br>";
      $sum += $car[2];
  }
  echo $sum;
//  session_start();          //php part
////$_SESSION['student']=array();
//$student_name='student_name'; //student_name form field name
//$student_city='city_id';   //city_id form field name
//array_push($_SESSION['student'],$student_name,$student_city);   
//print_r($_SESSION['student']);exit;
//foreach ( $_SESSION['student'] as $session)
//     {
//    echo "from foreach".$session;
//         //echo "sum from session".$sum;
//     }
//
//$sum=0;
//for($i = 0 ; $i < count($_SESSION['student']) ; $i++) {
//     echo '<td>'."---------".$_SESSION['student'][12].'</td>';
//     } 
//     $_SESSION['array']=array(array('string in array','second array','third array',4),
//         array('1 in array','2 array','3 array',4));
//     foreach ( $_SESSION['array'] as $session)
//     {
//         $sum+= $session[3];
//         echo "sum from session".$sum;
//     }
//     $_SERVER["REMOTE_ADDR"];
     
     $num= 15;
     //$rep=0;
     $fib=1;$fib2=0;
     for($i=0;$i<$num;$i++){
         $rep=$fib+$fib2 ;
         echo $rep." ";
         $fib=$fib2;$fib2=$rep;
     }
     echo "<br>";
     $num=12345;
     $num2=$num;
     $rev=0;
     while($num2!=0){
         $rev=$rev *10 + $num2%10;
         $num2=(int)($num2/10);
     }
     echo $rev;
     $k=12;echo "<br>";
     for($i=0;$i<12;$i++)
     {
         for($j=0;$j<=12;$j++){             
             if($j<=$k){
                 echo " ";
                
             }             
             else{echo "* ";}
         }$k--;echo "<br>";
     }
  // echo " ";
for ($i = 0; $i <= 11; $i++) {
  for($j=0;$j<$i;$j++){
    echo " ";
}   
for ($k = 0; $k < 12-$i; $k++) {

echo " *";

}
 for($j=0;$j<$i;$j++){
    echo " ";
} echo "<br>";
}
$array= array('5','4','3','2','5',);
$total=count($array);
$max= max($array);
$new=array();$max2=$max;
for($i=0;$i<$total;$i++){
    for($j=0;$j<$max;$j++){
        if($max2-$array[$i]>0){
            if($array[$i]==0){$new[$i][$j]="-"; }
      $new[$i][$j]=" "; 
      $max2--;
    }else{if($array[$i]==0){$new[$i][$j]="-"; }
        $new[$i][$j]="*";
        $max2--;
    }
    
}$max2=$max;
}$new2=array();
//print_r($new);
//for($i=0;$i<$total;$i++){
//    for($j=0;$j<$max;$j++)
//    {
//       echo $new[$i][$j];
//        
//    }
//    echo "<br>";
//    }
for($i=0;$i<$max;$i++){
    for($j=0;$j<$total;$j++)
    {
        $new2[$j][$i]= $new[$i][$j];
        
    }
    echo "<br>";
    }
//print_r($new2);
for($i=0;$i<$total;$i++){
    for($j=0;$j<$max;$j++)
    {
       echo $new2[$i][$j];
        
    }
    echo "<br>";
    }

    setcookie("pc","check1");
    echo $_COOKIE["pc"];
    $_SESSION["pc"]="check2";
    echo $_SESSION["pc"];
    //$a = array(1, 2, array("a", 3, "c",4));
//echo '<pre>';
//var_dump($a);
//for($i=1;$i<9;$i++){
//    for($j=1;$j<$i;$j++){
//     echo "*";    
//    }
//    echo "<br>";
//}
//$k=8;
//for($i=0;$i<8;$i++){
//    for($j=0;$j<8;$j++){
//        if($j<=$k){
//            echo " "." ";
//                        }
//            else{
//                echo "* ";
//            }
//    } echo "<br>"; 
//    $k--;
//}$n=65;
// for($i=0;$i<8;$i++){
// for($j=0;$j<=$i;$j++){
//     echo chr($n)." ";
// $n++;
//      }
//      echo "<br>";
// }
// for($i=0;$i<=5;$i++)
//{
//for($j=0;$j<=5-$i;$j++)
//{
//echo "* ";
//}
//echo "<br>";
//}
//$n=15;
//        $a=65;
//    // number of spaces 
//    $k = $n; 
//  
//    for($i=0;$i<$n;$i++){
//        
//        for($j=0;$j<$k;$j++)
//            echo " ";
//        $k=$k-1;
//        for($j=0;$j<=$i;$j++){
//            echo chr($a)." ";$a++; 
//        }echo "\n";
//    }
////---------------------------
//     // number of spaces 
//    $k = 15; 
//  
//    for ($i = 0; $i < $n; $i++)    {         
//        for ($j = 0; $j < $k; $j++) 
//            echo " ";       
//        $k = $k - 1; 
//          for ($j = 0; $j <= $i; $j++ ) 
//        {  
//            echo "* "; 
//        }   
//        echo "\n"; 
//    }    // number of spaces 
//    echo" space"."<br>";
//    $k = 15; 
//       for ($i = 0; $i < 15+1; $i++)    {         
//       
//          for ($j = 0; $j <= $k; $j++ ) 
//        {  
//            echo "* "; 
//        } $k--;  
//        echo "\n"; 
//      for ($j = 0; $j <= $i; $j++) 
//            echo " ";  
//    }   
/////////////// 
//    echo" space"."<br>"."<br>";
//$k = 15; 
//    for($i=0;$i<16;$i++){
//      for($j=0;$j<=$k;$j++){
//          echo "* ";
//      }$k--;
//      echo "\n";
//      for($j=0;$j<=$i;$j++)
//      echo " ";
//      
//      }
//  