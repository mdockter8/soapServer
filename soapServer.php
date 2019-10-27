<?php

require('Comments.php');
require('Users.php');
require('Posts.php');

$options = array("uri" => "http://localhost8080");

$server = new SoapServer(null, $options);
$s1 = $server->setClass('Comments');
$s2 = $server->setClass('Users');
$s3 = $server->setClass('Posts');

$s1->handle();
$s2->handle();
$s3->handle();