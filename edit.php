<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html  ng-app>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body >

    <ul class="nav nav-pills">
      <li class="active"><a href="index.php">Home admin</a></li>
      <li><a href="#">Sait</a></li>
      <li><a href="add_match.php">Add match</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>
    </ul>

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
     <div class="row" >
      <div class="col-sm-2 col-xs-0"></div>
      <div class="col-sm-8 col-xs-12" >
        <h1>Матч #: <?php echo $row['id_game']?></h1>
        <h2>Дата проведения: <?php echo $row['date']?></h2>
        <h3>Время начала:<?php echo $row['time']?></h3>
        <h1><?php echo $row['name_home']?>(id=<?php echo $row['id_home_team']?>) - <?php echo $row['name_gyest']?>(id=<?php echo $row['id_gyest_team']?>)</h1>
      </div>
    </div>
    <div class="row" >
      <div class="col-sm-2 col-xs-0 "></div>
      <div class="col-sm-8 col-xs-12 " >
        <form method="post" action="edit.php?id_game=<?php echo $id_edit_game; ?>" role="form" >
            <div class="form-group">
               <label for="title">Голы <?php echo $row['name_home']?></label>
               <input type="number" class="form-control" id="home_scored" placeholder="Enter" name="home_scored" value="<?php echo $row['home_goals']?>">
               <label for="title">Голы <?php echo $row['name_gyest']?></label>
               <input type="number" class="form-control" id="gyest_scored" placeholder="Enter" name="gyest_scored" value="<?php echo $row['gyest_goals']?>">
               <label for="title">Матч завершился? <?php echo $row['finish']?> (0 - нет, 1 - да)</label>
             </div>
           <div  ng-init="visible='<?php echo $row['finish']; ?>'"  >
             <h1 ng-if="visible==1">Матч завершен. Редактирование информации не возможно.
               <a href="index.php">Перейти на главную страницу</a>
             </h1>

           <button ng-if="visible==0" type="submit" class="btn btn-lg btn-primary pull-right" name="save"  >Изменить</button>

               <a  ng-if="visible==0"  class="btn btn-lg btn-primary pull-left"  href="end.php?id_game=<?php echo $row['id_game'];?>" name="end" onclick="return confirmDelete();">Матч окончен!</a>
 </div>
                 <script type="text/javascript">
                   function confirmDelete() {
                       if (confirm("Вы подтверждаете?")) {
                           return true;
                       } else {
                           return false;
                       }
                   }
                 </script>


         </form>
       </div>
       <div class="col-sm-2 col-xs-0 "></div>
    </div>
    </div>



 </body>
</html>
