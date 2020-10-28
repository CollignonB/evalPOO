<?php 

include "model/userManager.php";
include "model/entity/user.php";
include "template/nav.php";
include "template/header.php";

var_dump($_POST);

if(isset($_POST) && !empty($_POST)){
    $userManager = new userManager();
    $user = new User($_POST);
    var_dump($user);
    $userManager->addUser($user);
}


include "view/addUserView.php";
include "template/footer.php";