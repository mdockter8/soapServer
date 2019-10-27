<?php

require "vendor/autoload.php";

// include the class we want to use
require('Comments.php');

$gen = new \PHP2WSDL\PHPClass2WSDL("Comments", "http://localhost:8080/I425/Unit3/Lab2/soapServer.php");
$gen->generateWSDL();

file_put_contents("wsdl", $gen->dump());
