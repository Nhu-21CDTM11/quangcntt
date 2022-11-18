<?php
session_start();

$http = "http://";

$host = $_SERVER['HTTP_HOST'];
$root = $_SERVER['DOCUMENT_ROOT'];
$dir = str_replace("\\", "/", __DIR__);

$folder = str_replace($root, "", $dir);
$folder = str_replace("core", "", $folder);

$web_root = $http . $host . $folder;

define( "_BASE_ROOT", $web_root);

// require_once "helper.php";
$path = str_replace("core", "", $dir);

define( "_PATH_ROOT", $path);

require _PATH_ROOT ."core/mysql.php";
require _PATH_ROOT ."core/helper.php";
require _PATH_ROOT ."core/auth.php";
require _PATH_ROOT ."core/product.php";
require _PATH_ROOT ."core/categories.php";

