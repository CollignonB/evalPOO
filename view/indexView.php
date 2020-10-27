<div class="container">
    <table class="table table-striped table-bordered"">
        <thead>
            <tr>
                <th colspan=6 class="text-center">Les livres</th>
                <tr>
                <td>Tittre</td>
                <td>Auteur</td>
                <td>Date de parution</td>
                <td>Emprunté</td>
                <td>Catégorie</td>
                <td>Intéragir</td>
            </tr>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach($books as $key => $value) :
            ?>
            <tr>
                <td><?php echo $value->getTittle()?></td>
                <td><?php echo $value->getAuthor()?></td>
                <td><?php echo $value->getPublication_date()?></td>
                <td><?php echo $value->getStatus() === 0 ? "disponible" : "emprumté"?></td>
                <td><?php echo $value->getCategory()?></td>
                <td><a href="book.php?id=<?php echo $value->getId()?>">Editer</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
