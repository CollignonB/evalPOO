<div class="container">
    <div class="row">
        <div class="col-6">
            <p>Tittre : <?php echo $book->getTittle()?></p>
            <p>Auteur : <?php echo $book->getAuthor()?></p>
        </div>
        <div class ="col-6">
            <p>Date de parution : <?php echo $book->getPublication_date()?></p>
            <p>Catégorie : <?php echo $book->getCategory()?></p>
            <p>Statut : <?php echo $book->getUserId() === NULL ? "disponible" : "emprunté par l'utilisateur n° " . $book->getUserId()?></p>
        </div>
    </div>
    <div class="row">
        <div><p>Résumé</p></div>
        <div><?php echo $book->getResume()?></div>
    </div>
    <div>
    <?php if($book->getUserId() === NULL):?>
        <div>
            <form action="changeStatus.php" method="POST" name="userSelect">
                <select name = "user">
                    <?php foreach($users as $key => $user):?>
                        <option value="<?php echo $user->getId();?>"> <?php echo $user->getId();?> <?php echo $user->getFirstname();?> <?php echo $user->getLastname(); ?> </option>
                    <?php endforeach?>     
                </select>
                <input type="hidden" name="bookId" value="<?php echo $book->getId();?>">
                <input type="submit" value="Selectionner">
            </form>
        </div>
        <div>
            <a href="deleteBook.php?id= <?php echo $book->getId() ?>" type="button" class="btn btn-danger">Supprimmer le livre</a>
        </div>
    <?php else:?>
        <a href="changeStatus.php?id=<?php echo $book->getId()?>" type="button" class="btn btn-success">Rendre</a>
    <?php endif?>
    </div>
</div>