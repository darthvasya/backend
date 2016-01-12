<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
mysql_query('SET NAMES utf8');


$result = mysql_query("SELECT id_team, name_team FROM teams") or die(mysql_error());
$data = mysql_fetch_assoc($result);
$outp = "";
do{
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $data["id_team"] . '",';
    $outp .= '"name":"'   . $data["name_team"]        . '"}';
  
}while($data =  mysql_fetch_assoc($result)) ;
$outp ='{"records":['.$outp.']}';
mysql_close();

echo($outp);
?>
