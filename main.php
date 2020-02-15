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

$val = $col_2->add(["FormField/Line", '45']);

$clicker = $col_2->add(["Button","Click!!!","yellow fluid big"]);
$clicker->js('click', new \atk4\ui\jsReload($val, ['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));


$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);

$x2 = $col_3->add(["Button","click x2","inverted violet"]);
$pus = $col_3->add(["Button","+0.5 cli/sek","inverted green"]);
