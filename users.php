<?php
include "template/nav.php";
include "template/header.php";
include "model/userManager.php";
include "model/entity/user.php";

$userManager = new userManager();

$users = $userManager->getUsers();
var_dump($users);

include "view/usersView.php";
include "template/footer.php";