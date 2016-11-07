
<?php
require_once __DIR__ . '/autoload.php';


use VideoCloud\Storage\UploadManager;


$uploadMgr = new UploadManager();


$opt=array();
$opt["accessKey"]="your AppKey";
$opt["secretKey"]="your AppSecret";
$opt["trunkSize"]= 2 * 1024 * 1024;

//$filePath = 'C:/wamp/www/php-sdk/php-logo.png';
$filePath = './php-logo.png';

list($ret, $err) = $uploadMgr->init($opt, $filePath);
if ($err !== null) {
    die($err);
}

list($ret, $err) = $uploadMgr->upload($opt,$ret['ret'],$filePath);
if ($err !== null) {
    var_dump($err);
} else {
    var_dump($ret);
}