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
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">


    <!--for datapicker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

      <script>
      //датапикер
        $(function() {
          $( "#datepicker" ).datepicker();
        });
        </script>

    <style media="screen">
      label{
        font-size: 22px;
        font-family: 'Helvetica';
      }
      .marg{
         margin-bottom: 15px;
      }
    </style>
  </head>
  <body >

    <ul class="nav nav-pills">
      <li><a href="index.php">Home admin</a></li>
      <li><a href="#">Sait</a></li>
      <li  class="active"><a href="add_match.php">Add match</a></li>
    </ul>
<?php
  $result = mysql_query("SELECT id_game FROM desk ORDER BY id_game DESC LIMIT 1") or die(mysql_error());
  $data = mysql_fetch_array($result);

  $result_teams = mysql_query("SELECT * FROM teams ORDER BY name_team ") or die(mysql_error());
  $data_teams = mysql_fetch_array($result_teams);
?>
<h1>ID игры: #<?php echo $data['id_game']+1; ?> </h1>
<form class="form-horizontal" action="add_match_end.php" method="post">
  <fieldset>
    <!--<legend>Legend</legend>-->

       <label for="select" class="col-lg-2 control-label">Команда хозяев:</label>
      <div class="col-lg-10 marg">
        <select class="form-control input-lg" id="select" name="home_team">
        <?php do{?>
          <option value="<?php echo $data_teams['id_team'];?>"><?php echo $data_teams['name_team'];?></option>
        <?php }while($data_teams = mysql_fetch_assoc($result_teams)); ?>
        </select>
       </div>

<?php
$result_teams1 = mysql_query("SELECT * FROM teams ORDER BY name_team ") or die(mysql_error());
$data_teams1 = mysql_fetch_array($result_teams1);
 ?>

    <label for="select" class="col-lg-2 control-label">Команда гостей:</label>
      <div class="col-lg-10 marg">
        <select class="form-control input-lg" id="select" name="gyest_team">
          <?php do{?>
            <option value="<?php echo $data_teams1['id_team'];?>"><?php echo $data_teams1['name_team'];?></option>
          <?php }while($data_teams1 = mysql_fetch_assoc($result_teams1)); ?>
      </select>
     </div>

     <label for="select" class="col-lg-2 control-label">Дата проведения:</label>
       <div class="col-lg-10 marg">
          <input type="text"  class="form-control input-lg" id="datepicker" name="date" />
       </div>

       <label for="select" class="col-lg-2 control-label">Время начала:</label>
         <div class="col-lg-10 marg">
            <input type="text"  class="form-control input-lg" name="time">
         </div>


       <label for="textArea" class="col-lg-2 control-label">Описание: </label>
       <div class="col-lg-10">
         <textarea class="form-control" rows="3" id="textArea" name="inf"></textarea>
         <span class="help-block">Вспомогательная информация.</span>

       </div>

       <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Очистить</button>
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
    <input type="hidden" name="id_game" value="<?php echo $data['id_game']+1; ?>">
   </fieldset>
</form>






 </body>
</html>
