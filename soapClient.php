<?php

$options = array(
    "location" => "http://localhost:8080/I425/Unit3/Lab2/soapServer.php",
    "uri" => "http://localhost");

try {
    $client = new SoapClient(null, $options);
    $comments = $client->getComments();
    $users = $client->getUsers();
    $posts = $client->getPosts();
    //print_r($comments);
    header("Content-Type: application/json");
    echo json_encode($comments);
    echo json_encode($users);
    echo json_encode($posts);
} catch (SoapFault $e) {
    var_dump($e);
}
