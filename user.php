<?php
include "template/nav.php";
include "template/header.php";
include "model/userManager.php";
include "model/entity/user.php";
include "model/entity/book.php";

$userManager = new userManager();
$user = $userManager->getUserById($_GET["id"]);

$date = $user->getBirthdate();
$date = date('d/m/Y', strtotime($date));

$age = DateTime::createFromFormat('d/m/Y', $date)->diff(new DateTime('now'))->y;

$usersBook = $userManager->getUserBook($user);

include "view/userView.php";
include "template/footer.php";
