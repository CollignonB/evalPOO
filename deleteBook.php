<?php 
include "model/bookManager.php";
include "model/entity/book.php";

$bookManager = new bookManager();
$book = $bookManager->getBook($_GET["id"]);

var_dump($book);

$bookManager->deleteBook($book);

header("Location:index.php");
