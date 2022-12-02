<?php

// Response
$res = isset($_GET['pwd']) && !empty($_GET['pwd']) ? password_hash($_GET['pwd'], PASSWORD_DEFAULT) : '';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");

echo @$_GET['callback'] . '('.json_encode($res).')';
exit();
?>
