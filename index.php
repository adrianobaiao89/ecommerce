<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
$app = new Slim();

$app->config('debug', true);

require_once("functions.php");
require_once("site.php");
require_once("site-categories.php");
require_once("site-products.php");
require_once("site-cart.php");
require_once("site-checkout.php");
require_once("admin.php");
require_once("admin-user.php");
require_once("admin-categories.php");
require_once("admin-products.php");

$app->run();

?>