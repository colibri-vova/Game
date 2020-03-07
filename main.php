<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <script>
  window.onload = function() {
    var click = document.getElementById("clicke");
    var a = "<?=session_start(); ?>";
    var val = "<?= $_SESSION['cookie']; ?>";
    click.value = val;
  }
    </script>
  </head>
  <body>

  </body>
</html>

<?php
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');
$user = new User($db);
$user->load($_SESSION['user_id']);
$_SESSION['cookie'] = $user['clicker_count'];
$user->unload();



$columns = $app->add('Columns');
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" id="clicke" value=0 onclick=Clicker() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
 function Clicker() {
   var click = document.getElementById("clicke");
   click.value = parseInt(click.value) + 1;
 }
</script>')]);

$slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" value="Save"  onclick=Save() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
 function Save() {
   var click = document.getElementById("clicke");
   var link = \"save.php?val=\"+click.value;
   window.open(link);

 }
</script>')]);


//$val = $col_2->add(["FormField/Line", '45']);

//$clicker = $col_2->add(["Button","Click!!!","yellow fluid big"]);
//$clicker->js('click', new \atk4\ui\jsReload($val, ['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));


$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);

$x2 = $col_3->add(["Button","click x2","inverted violet"]);
$pus = $col_3->add(["Button","+0.5 cli/sek","inverted green"]);
