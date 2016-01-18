<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
mysql_query('SET NAMES utf8');


$result = mysql_query("SELECT * FROM desk") or die(mysql_error());
$data = mysql_fetch_assoc($result);
$outp = "";
do{
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id_game:"'  . $data["id_game"] . '",';
    $outp .= '"name_home":"'  . $data["name_home"] . '",';
    $outp .= '"name_gyest":"'  . $data["name_gyest"] . '",';
    $outp .= '"id_home_team":"'  . $data["id_home_team"] . '",';
    $outp .= '"id_gyest_team":"'  . $data["id_gyest_team"] . '",';
    $outp .= '"date":"'  . $data["date"] . '",';
    $outp .= '"time":"'  . $data["time"] . '",';
    $outp .= '"home_goals":"'  . $data["home_goals"] . '",';
    $outp .= '"gyest_goals":"'  . $data["gyest_goals"] . '",';
    $outp .= '"game_description":"'  . $data["game_description"] . '",';
    $outp .= '"finish":"'   . $data["finish"]        . '"}';

}while($data =  mysql_fetch_assoc($result)) ;
$outp ='{"matches":['.$outp.']}';
//$outp ='['.$outp.']';
mysql_close();

echo($outp);
?>
