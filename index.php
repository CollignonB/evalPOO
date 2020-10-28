<?php
include "model/bookManager.php";
include "model/entity/book.php";
include "template/nav.php";
include "template/header.php";

$bookManager = new BookManager();

$books = $bookManager->getBooks();

include "view/indexView.php";
include "template/footer.php";
