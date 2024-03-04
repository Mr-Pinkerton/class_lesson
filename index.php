<?php


$sql1 = 'SELECT * FROM `product` WHERE `price` > 4000 AND `category_id` = 4';
$sql2 = 'SELECT `title`,`description` FROM `product` WHERE `price` < 4000 AND `category_id` != 4';
$sql3 = 'UPDATE `product` SET `price` = 1500 WHERE `category_id` = 1';
$sql4 = 'DELETE FROM `product` WHERE `category_id` = 5';


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once('App/Engine/Model.php');
include_once('App/Engine/Page.php');
include_once('App/Pages/Main.php');
include_once('App/Pages/Products.php');
include_once('App/Pages/Product.php');
include_once('App/Pages/AboutUs.php');

if (!isset($_GET['page'])) {
    $_GET['page'] = 'main';
}

$pageParam = $_GET['page'];

switch ($pageParam) {
    case 'about_us':
        $page = new AboutUs();
        break;
    case 'products':
        $page = new Products();
        break;
    case 'product':
        $page = new Product();
        break;
    case 'main':
        $page = new Main();
        break;
    default:
        echo '404'; 
        die();
}

include_once ('resources/html/main/header.html');
$page->renderHtml();
include_once ('resources/html/main/footer.html');