<?php 

$app->get('/', 'App\Controllers\HomeController:index');

$app->get('/users', 'App\Controllers\UserController:getAll');
 
$app->get('/users/add','App\Controllers\UserController:add');

$app->get('/profile/{id}', 'App\Controllers\UserController:find');