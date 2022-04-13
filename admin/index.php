<?php
require 'config/configAdmin.php';
require 'adm/core/CoreAdmin.php';
require 'vendor/autoload.php';

$core = new CoreAdmin;
$core->run();