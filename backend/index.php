<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'conexao.php';

$id = rand(1,999);
$name = $_POST["name"];

$query = "INSERT INTO mensagens(id, name) VALUES ('$id', '$name')";

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>