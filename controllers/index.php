<?php


use Slime\render;



$app->get('/', function ($req, $res, $args) {

  return render::hbs($req, $res, [
    'layout' => '_layouts/base',
    'template' => 'index',
    'title' => $GLOBALS['site_title'],
  ]);

});






$app->get('/docs[/]', function ($req, $res, $args) {

  return render::hbs($req, $res, [
    'layout' => '_layouts/base',
    'template' => 'docs',
    'title' => $GLOBALS['site_title'],
  ]);

});




?>