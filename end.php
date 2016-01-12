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
      //mysql_query("UPDATE statistic SET games_played = games_played + 1 WHERE  id_team = 1  ") or die(mysql_error());
      mysql_query("UPDATE desk SET finish = 1 WHERE  id_game = '$id_end_game' ") or die(mysql_error());

    ?>
    <h1>Вы завершили матч под номером #<?php echo $id_end_game;?>, данные успешно сохранены в базе данных.</h1>
    <h2><a href="edit.php?id_game=<?php echo $id_end_game?>">Нажмите сюда, что бы перейти на страницу матча</a></h2>

    <?php
    //получение данных о матче
    $result = mysql_query("SELECT *  FROM desk WHERE id_game = '$id_end_game'") or die(mysql_error());
    $data = mysql_fetch_assoc($result);

    //получение id команд участвовавших в игре
    $id_home = $data['id_home_team'];
    $id_gyest = $data['id_gyest_team'];
    //количество забитых голов командами
    $home_goals = $data['home_goals'];
    $gyest_goals = $data['gyest_goals'];
    //добавление командам по 1 игре в статистику
    mysql_query("UPDATE statistic SET games_played = games_played + 1,
                                       scored = scored + '$home_goals',
                                       missed = missed + '$gyest_goals',
                                       diff = scored - missed
                                       WHERE  id_team = '$id_home' ") or die(mysql_error());
    mysql_query("UPDATE statistic SET games_played = games_played + 1,
                                       scored = scored + '$gyest_goals',
                                       missed = missed + '$home_goals',
                                       diff = scored - missed
                                       WHERE  id_team = '$id_gyest' ") or die(mysql_error());
    //определение результата матча

    $winner = "home";

    if($home_goals > $gyest_goals)
    {
        mysql_query("UPDATE statistic SET wins = wins + 1, points = points + 3 WHERE  id_team = '$id_home' ") or die(mysql_error());
        mysql_query("UPDATE statistic SET loses = loses + 1 WHERE  id_team = '$id_gyest' ") or die(mysql_error());
        $winner = "home";
    }else if($home_goals == $gyest_goals){
        $winner = "draw";
        mysql_query("UPDATE statistic SET draw = draw + 1, points = points + 1 WHERE  id_team = '$id_home' ") or die(mysql_error());
        mysql_query("UPDATE statistic SET draw = draw + 1, points = points + 1 WHERE  id_team = '$id_gyest' ") or die(mysql_error());

    }else{
        mysql_query("UPDATE statistic SET wins = wins + 1, points = points + 3 WHERE  id_team = '$id_gyest' ") or die(mysql_error());
        mysql_query("UPDATE statistic SET loses = loses + 1 WHERE  id_team = '$id_home' ") or die(mysql_error());
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
