<?php


include_once libs('/Boot/APPBoot.php');
include_once libs('/Boot/controllersBoot.php');
include_once libs('/Boot/httpBoot.php');
include_once libs('/Boot/jobsBoot.php');
include_once libs('/Boot/middlewaresBoot.php');
include_once libs('/Boot/modelsBoot.php');
include_once libs('/Boot/formsBoot.php');


$router = new Router;
include_once app_path('/app/routes.php');





