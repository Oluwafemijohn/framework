<?php

// use $router variable for create routes.

$router->get('/' , 'HomeController@index');

$router->get('/help' , function(){
    return 'here is help';
});

$router->any('/any' , function (){
    return 'this is a any';
});
