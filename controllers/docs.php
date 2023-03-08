<?php


use Slime\render;


$app->get('/docs[/]', function ($req, $res, $args) {

  return render::hbs($req, $res, [
    'layout' => '_layouts/docs',
    'template' => 'docs/home',
    'title' => 'docs - ' . $GLOBALS['site_title'],
    'data' => [
      'hide_footer' => true
    ]
  ]);

});




$app->get('/docs/default[/]', function ($req, $res, $args) {

  return render::hbs($req, $res, [
    'layout' => '_layouts/docs',
    'template' => 'docs-elements',
    'title' => 'default elements - ' . $GLOBALS['site_title'],
    'data' => [
      'hide_footer' => true
    ]
  ]);

});

