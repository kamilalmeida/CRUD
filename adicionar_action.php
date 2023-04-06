<?php

require "config.php";

$nome = filter_input(INPUT_POST, "nome");
$nome = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


$sql = $pdo->prepare("INSERT INTO pessoas(nome, email) VALUES (:nome, :email)");
