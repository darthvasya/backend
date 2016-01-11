<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>End match</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
  </head>
  <body>
    <?php
      $id_end_game = $_GET['id_game'];
      mysql_query("UPDATE desk SET finish = 1 WHERE  id_game = '$id_end_game' ") or die(mysql_error());

    ?>
    <h1>Вы завершили матч под номером #<?php echo $id_end_game;?>, данные успешно сохранены в базу данных.</h1>
    <h2><a href="edit.php?id_game=<?php echo $id_end_game?>">Нажмите сюда, что бы перейти на страницу матча</a></h2>

    <?php
    $result = mysql_query("SELECT *  FROM desk WHERE id_game = '$id_end_game'") or die(mysql_error());
    $data = mysql_fetch_assoc($result);

    $home_stat = mysql_query("SELECT * FROM statistic WHERE id_team = 3 ") or die(mysql_error());
    $gyest_stat = mysql_query("SELECT * FROM statistic WHERE id_team = 4 ") or die(mysql_error());

    $home_data = mysql_fetch_assoc($home_stat);
    $gyest_data = mysql_fetch_assoc($gyest_stat);



    $winner = "home";
    $home_goals = $data['home_goals'];
    $gyest_goals = $data['gyest_goals'];


    if($home_goals > $gyest_goals)
    {

        $winner = "home";
    }else if($home_goals == $gyest_goals){
        $winner = "draw";

    }else{
        $winner = "gyest";
         
    }

        do{?>
                <h1>ID match: <?php echo $data['id_game'];?></h1>
                <h1>Голы команды хозяев (<?php echo $data['name_home']?>) = <?php echo $data['home_goals']; ?></h1>
                <h1>Голы команды гостей (<?php echo $data['name_gyest']?>) = <?php echo $data['gyest_goals']; ?></h1>
                <h1>Winner <?php echo $winner ?></h1>
    <?php } while($data = mysql_fetch_assoc($result));?>


    <?php
 mysql_close();
 ?>
    </body>
</html>
