<?php
include "model/bookManager.php";
include "model/entity/book.php";
include "model/entity/user.php";
include "model/userManager.php";
include "template/nav.php";
include "template/header.php";

$bookManager = new bookManager();
$book = $bookManager->getBook($_GET["id"]);

$userManager = new userManager();
$users = $userManager->getUsers();

$borrowingUser = $userManager->getUserById($book->getUserId());


include "view/bookView.php";
include "template/footer.php";