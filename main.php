<?php
session_start();
require 'vendor/autoload.php';
$n = 90;
$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');



$columns = $app->add('Columns');
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$clicker = $col_2->add(["Button","","blue fluid big"]);
$label = $col_2->add(["label",$_SESSION["user_id"]]);
$save = $col_2->add(["Button","Save","black big"]);
$clicker->on("click",function($clicker){



  $clicker->set("Test");
  $clicker->js()->reload();
});
