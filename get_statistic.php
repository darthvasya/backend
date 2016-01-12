<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
mysql_query('SET NAMES utf8');


$result = mysql_query("SELECT * FROM teams INNER JOIN statistic ON teams.id_team = statistic.id_team ORDER BY  points DESC, games_played DESC, diff DESC ") or die(mysql_error());
$data = mysql_fetch_assoc($result);
$outp = "";
do{
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id_team":"'  . $data["id_team"] . '",';
    $outp .= '"name_team":"'  . $data["name_team"] . '",';
    $outp .= '"games_played":"'  . $data["games_played"] . '",';
    $outp .= '"scored":"'  . $data["scored"] . '",';
    $outp .= '"missed":"'  . $data["missed"] . '",';
    $outp .= '"diff":"'  . $data["diff"] . '",';
    $outp .= '"wins":"'  . $data["wins"] . '",';
    $outp .= '"loses":"'  . $data["loses"] . '",';
    $outp .= '"draw":"'  . $data["draw"] . '",';
    $outp .= '"points":"'   . $data["points"]        . '"}';

}while($data =  mysql_fetch_assoc($result)) ;
$outp ='{"teams":['.$outp.']}';
mysql_close();

echo($outp);
?>
