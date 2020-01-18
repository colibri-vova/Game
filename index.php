<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');

$clicker_name = $app->add(["Header","Colibri clicker","centered"]);

$button_new = $app->add(["Button","Start","circular icon olive","icon"=>"power off"]);

$button_new->on('click', function() {
  return new \atk4\ui\jsExpression("document.location = 'main.php'");
});

$button_new = $app->add(["Button","Reg","circular icon olive","icon"=>"power off"])->link(['reg']);
