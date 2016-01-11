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

$id_edit_game = $_GET['id_game'];

$result = mysql_query("SELECT * FROM desk WHERE  id_game = '$id_edit_game' ") or die(mysql_error());
$row = mysql_fetch_array($result);


if(isset($_POST['save']))
{
  $home_scored_result = $_POST['home_scored'];
  $gyest_scored_result = $_POST['gyest_scored'];
  mysql_query("UPDATE desk SET home_goals='$home_scored_result',
                               gyest_goals='$gyest_scored_result'
                               WHERE  id_game = '$id_edit_game' ");
}
mysql_close();
 ?>
 <div class="row" style="background-color: #5bc0de;">
  <div class="col-sm-2 col-xs-0"></div>
  <div class="col-sm-8 col-xs-12" >
    <h1 class="bg-success">Матч #: <?php echo $row['id_game']?></h1>
    <h2 class="bg-warning">Дата проведения: <?php echo $row['date']?></h2>
    <h3 class="bg-danger">Время начала:<?php echo $row['time']?></h3>
    <h1 class="bg-info"><?php echo $row['name_home']?>(id=<?php echo $row['id_home_team']?>) - <?php echo $row['name_gyest']?>(id=<?php echo $row['id_gyest_team']?>)</h1>
  </div>
</div>
<div class="row" style="background-color: #5cb85c;">
  <div class="col-sm-2 col-xs-0 "></div>
  <div class="col-sm-8 col-xs-12 ">
    <form method="post" action="edit.php?id_game=<?php echo $id_edit_game; ?>" role="form" >
        <div class="form-group">
           <label for="title">Голы <?php echo $row['name_home']?></label>
           <input type="number" class="form-control" id="home_scored" placeholder="Enter" name="home_scored" value="<?php echo $row['home_goals']?>">
           <label for="title">Голы <?php echo $row['name_gyest']?></label>
           <input type="number" class="form-control" id="gyest_scored" placeholder="Enter" name="gyest_scored" value="<?php echo $row['gyest_goals']?>">
           <label for="title">Матч завершился? <?php echo $row['finish']?> (0 - нет, 1 - да)</label>
         </div>
       <button type="submit" class="btn btn-lg btn-primary pull-right" name="save"  >Изменить</button>
       <button class="btn btn-lg pull-left" name="end" style="background-color: @gray;">
         <a href="end.php?id_game=<?php echo $row['id_game'];?>">Матч окончен!</a>
       </button>
     </form>
   </div>
   <div class="col-sm-2 col-xs-0 "></div>
</div>
</div>



 </body>
</html>
