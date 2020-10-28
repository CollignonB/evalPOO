<?php 

include "model/bookManager.php";
include "model/userManager.php";
include "model/entity/book.php";
include "model/entity/user.php";

$bookManager = new bookManager();
$userManager = new UserManager();

if(isset($_POST) && !empty($_POST)){
    echo "coucou j'ajoute un utilisteur au livre";
    $book = $bookManager->getBook($_POST["bookId"]);
    $user = $userManager->getUserById($_POST["user"]);
    $bookManager->bookAssign($user, $book);
}else{
    echo "je suis disponible a nouveau";
    $book = $bookManager->getBook($_GET["id"]);
    $bookManager->updateBookStatus($book);

}


// header("Location:book.php?id=". $book->getId());
header("Location:index.php");