<?php 

require_once('lib/vendor/autoload.php');

use Models\ClassCrud;

$crud = new ClassCrud;
$crud->selectDB(
    "*",
    "produtos",
    "",
    array()
);

$f = $bf->fetch(PDO::FETCH_ASSOC);

var_dump($f);