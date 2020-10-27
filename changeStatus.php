<?php 

include "model/bookManager.php";
include "model/entity/book.php";

$bookManager = new bookManager();

$book = $bookManager->getBook($_GET["id"]);
$bookManager->updateBookStatus($book);

header("Location:book.php?id=". $book->getId());