<html>
    <head></head>
    <body>


<form action="oct2018.php" method="POST">
    Student Name:<input type="text" name="name">
    <input type="submit">
        </form>
        </body>
       <?php

$abc="HOT";
//echo $_POST["name"];
 $grades = array("Jim"=>"A+", "Gene"=>"B+" , "Oscar" =>"C+");
 foreach($grades as $key1 => $mark)
 {
     echo "key is ".$key1." and mark is ".$mark."<br>";
 }
 
        echo $_POST["name"]."this is the input"."<br>";
        
        function process($name, $calculate){
            echo "<br>";
            echo " \n name = ".$name ."Age = ". $calculate;
            echo "Hello $name,age = $calculate";
        }
        function maxq($num1,$num2){
            if($num1>$num2){
                return $num1;
            }
 else {return $num2;}
        }
        function generate_salt()
{
    $salt = '';

    for($i = 0; $i < 10; $i++)
    {
        $salt .= rand(0,9).'_';
    }
    $salt = rand(0,9).time();

    return $salt;
}
echo generate_salt();
        
        echo maxq(122, 32);
       // echo $big;
        $str= "asdb,we,eqfn,qwqwfq,wdqwd,qw,last";
        $new= explode(",",$str);
        print_r($new);     
        $cars= array('audi','jag','merc','estem');
        $str= implode(",", $cars);
        
        $q= print $str;echo $q;
                echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];
//?>
                
                
                
                
                ?>
       
        </html>