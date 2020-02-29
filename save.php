<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$save = new User($db);
