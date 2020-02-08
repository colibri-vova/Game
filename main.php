<?php
session_start();
require 'vendor/autoload.php';
$n = 90;
$m = 1;
$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');



$columns = $app->add('Columns');
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$clicker = $col_2->add(["Button",$_SESSION["i"],"yellow fluid big"]);
$save = $col_2->add(["Button","Save","purple big"]);
$clicker->on("click",function($m){
  $_SESSION["i"] = $_SESSION["i"] + 1;
  return $m;



  $clicker->set("Test");
  $clicker->js()->reload();
});

$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);
