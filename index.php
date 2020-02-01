<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('vov4ik');
$app->initLayout('Centered');

$clicker_name = $app->add(["Header","Colibri clicker","centered"]);

$button_login = $app->add(["Button","log in","circular icon yellow","icon"=>"power off"]);

$button_login->on('click', function() {
  return new \atk4\ui\jsExpression("document.location = 'login.php'");
});

$button_new = $app->add(["Button","Reg","circular icon brown","icon"=>"power off"])->link(['reg']);
