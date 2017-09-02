<?php
session_start();
require_once __DIR__ .'/vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id'                => '1260526097390850',
    'app_secret'            => 'ceb50931846eb0b3e8599da97952d651',
    'default_graph_version' => 'v2.10', //v.2.2
]);

$helper = $fb->getRedirectLoginHelper();
