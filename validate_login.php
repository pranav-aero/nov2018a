<?php
require_once('dbconn.php'); 
// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];
// echo $email;echo $pass;

// Connect to the database
//$con = mysql_connect("localhost","root","");
//mysql_select_db("phplogn",$con);
//mysql_select_db('phplogin');
// Make sure we connected successfully
//if(! $con)
//{
//    die('Connection Failed'.mysql_error());
//}

// Select the database to use


$result = mysql_query("SELECT * from phplogin");
while ($row=mysql_fetch_array($result)) {
    echo $row["name"];
}
print_r($result);exit;
if($result === false){
    throw new Exception(mysql_error($connection));
}
while ($row=mysql_fetch_array($result)) {
    echo $row["name"];
}
//
//if($result === false){
//    throw new Exception(mysql_error($connection));
//}
//
//
//$row = mysqli_fetch_array($result);
//echo '<pre>', $row;
//
//if($row["users_email"]==$email && $row["users_pass"]==$pass)
//    echo"You are a validated user.";
//else
//    echo"Sorry, your credentials are not valid, Please try again.";
?>
