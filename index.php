<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
  </head>
  <body>

<?php
   $result = mysql_query("SELECT *  FROM desk ORDER BY id_game") or die(mysql_error());
   $data = mysql_fetch_assoc($result);

   do{?>
     <div style="border-bottom: 2px solid green;">
           <h1>ID match: <?php echo $data['id_game'];?></h1>
           <h1 class="bg-info"><?php echo $data['name_home']?>(id=<?php echo $data['id_home_team']?>) - <?php echo $data['name_gyest']?>(id=<?php echo $data['id_gyest_team']?>)</h1>
           <h3><a href="edit.php?id_game=<?php echo $data['id_game'];?>">Редактировать</a></h3>
     </div>
   <?php } while($data = mysql_fetch_assoc($result));?>

 </body>
</html>
