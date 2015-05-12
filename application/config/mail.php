<?php

$config['protocol'] = "smtp";
$config['smtp_host'] = "";
$config['smtp_port'] = "";
$config['smtp_user'] = "";
$config['smtp_pass'] = "";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

if (($local_config = @json_decode(file_get_contents('config.json'), true))) {
    $config['smtp_host'] = $local_config['mail']['smtp_host'];
    $config['smtp_port'] = $local_config['mail']['smtp_port'];
    $config['smtp_user'] = $local_config['mail']['smtp_user'];
    $config['smtp_pass'] = $local_config['mail']['smtp_pass'];
}

