<div class="container">
    <div class="row">
        <div class="col-6">
            <p>Tittre : <?php echo $book->getTittle()?></p>
            <p>Auteur : <?php echo $book->getAuthor()?></p>
        </div>
        <div class ="col-6">
            <p>Date de parution : <?php echo $book->getPublication_date()?></p>
            <p>Catégorie : <?php echo $book->getCategory()?></p>
            <p>Statut : <?php echo $book->getStatus() === 0 ? "disponible" : "emprumté"?></p>
        </div>
    </div>
    <div class="row">
        <div><p>Résumé</p></div>
        <div><?php echo $book->getResume()?></div>
    </div>
    <div class="row">
    <a href="changeStatus.php?id=<?php echo $book->getId()?>" type="button" class="btn btn-success">Emprumter/Rendre </a>
    </div>
</div>
