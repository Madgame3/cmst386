<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '839841886165025',
    'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
    'default_graph_version' => 'v2.9',
]);
echo 'can I see this';
$helper = $fb->getRedirectLoginHelper();
echo $helper;
?>