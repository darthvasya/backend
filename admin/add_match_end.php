<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen" title="no title" charset="utf-8">



  </head>
  <body >

    <ul class="nav nav-pills">
      <li><a href="index.php">Home admin</a></li>
      <li><a href="#">Sait</a></li>
      <li  class="active"><a href="add_match.php">Add match</a></li>
    </ul>

<?php
  $id_home = $_POST['home_team'];
  $id_gyest = $_POST['gyest_team'];

  $result = mysql_query("SELECT name_team FROM teams WHERE id_team = '$id_home'") or die(mysql_error());
  $data = mysql_fetch_array($result);

  $result1 = mysql_query("SELECT name_team FROM teams WHERE id_team = '$id_gyest'") or die(mysql_error());
  $data1 = mysql_fetch_array($result1);


$id_game = $_POST['id_game'];
$name_home = $data['name_team'];
$name_gyest = $data1['name_team'];
$date = $_POST['date'];
$time = $_POST['time'];
$inf = $_POST['inf'];

  mysql_query("INSERT INTO desk
              (id_game,name_home, name_gyest, id_home_team, id_gyest_team, date, time, game_description)
      VALUES  ('$id_game', '$name_home', '$name_gyest', '$id_home', '$id_gyest', '$date', '$time', '$inf')  ") or die(mysql_error());




 ?>
 <h1>Матч #<?php echo $_POST['id_game']?> успешно добавлен в расписание!</h1>
 <h1><?php echo $data['name_team'] ?> - <?php echo $data1['name_team'] ?></h1>
<h2>Дата проведения: <?php echo $_POST['date']?></h2>
<h2>Время начала: <?php echo $_POST['time']?></h2>
<h2>Описание: <?php echo $_POST['inf']?></h2>



 </body>
</html>
