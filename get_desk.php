<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
mysql_query('SET NAMES utf8');


$result = mysql_query("SELECT * FROM desk") or die(mysql_error());
$data = mysql_fetch_assoc($result);
$outp = "";


$emparray = array();
    do
   {
       $emparray[] = $data;
   } while($data =mysql_fetch_assoc($result));

mysql_close();

echo json_encode($emparray);
?>
