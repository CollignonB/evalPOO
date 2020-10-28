<?php
include "template/nav.php";
include "template/header.php";
include "model/entity/book.php";
include "model/bookManager.php";

if(isset($_POST) && !empty($_POST)){
    $bookManager = new bookManager();
    $book = new Book($_POST);
    $bookManager->addBook($book);
}

include "view/addBookView.php";
include "template/footer.php";