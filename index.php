﻿<?php

define("DS",DIRECTORY_SEPARATOR);

require __DIR__ . DS . 'vendor' . DS .'autoload.php';


use Controllers\Printer;

$print = new Printer;
