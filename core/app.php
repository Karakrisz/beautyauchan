<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');

route('/administ', 'adminController');
route('/promotionsSubmit', 'promotionsSubmitController', "POST");

route('/aboutAdding', 'aboutAddingController');
route('/aboutSubmit', 'aboutSubmitController', "POST");


list($view, $data) = dispatch($cleaned, 'notFoundController');

if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}

extract($data);
ob_clean();

require_once "tamplates/layout.php";
