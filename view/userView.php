<div class="container">
    <div>
        <div>
            <div><h2>Utilisateur</h2></div>
            <div><p>ID : <?php echo $user->getID();?></p></div>
            <div><p>Nom : <?php echo $user->getLastname();?></p></div>
            <div><p>Prénom : <?php echo $user->getFirstname();?></p></div>
            <div><p>Age : <?php echo $age;?> ans (<?php echo $date?>)</p></div>
        </div>
        <div class="row">
            <div class="col-6"><p>Ville : <?php echo $user->getCity();?></p></div>
            <div class="col-6"><p>Code postal : <?php echo $user->getPostal_code();?></p></div>
        </div>
        <div><p>Adresse : <?php echo $user->getAddress();?></p></div>
    </div>
    <div><h2>Liste de livres en cours d'emprunt</h2></div>
    <?php foreach($usersBook as $key => $book): ?>
    <div>
        <div><a href="book.php?id=<?php echo $book->getId();?>">ID : <?php echo $book->getId()?></a></div>
        <div><p>Titte : <?php echo $book->getTittle()?></p></div>
        <div><p>Auteur : <?php echo $book->getAuthor()?></p></div>
        <div><p>_________________________________________________________</p></div>
    </div>
    <?php endforeach ?>
</div>
