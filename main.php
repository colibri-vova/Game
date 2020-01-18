<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');



$columns = $app->add('Columns');
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$clicker = $col_2->add(["Button","666","blue fluid big"]);
$clicker->on('click', function($clicker) {
  $clicker->set("Test");
  $clicker->js()->reload();
});
