<div class="container">
    <table class="table table-striped table-bordered"">
        <thead>
            <tr>
                <th colspan=9 class="text-center">Les utilisateurs</th>
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Date de naissance</td>
                    <td>Adresse</td>
                    <td>Code postal</td>
                    <td>Ville</td>
                    <td>Sexe</td>
                    <td>Plus d'infos</td>
                </tr>
            </tr>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach($users as $key => $value) :
            ?>
            <tr>
                <td><?php echo $value->getId()?></td>
                <td><?php echo $value->getFirstname()?></td>
                <td><?php echo $value->getLastname()?></td>
                <td><?php echo $value->getBirthdate()?></td>
                <td><?php echo $value->getAddress()?></td>
                <td><?php echo $value->getPostal_code()?></td>
                <td><?php echo $value->getCity()?></td>
                <td><?php echo $value->getSex()?></td>
                <td><a href="user.php?id=<?php echo $value->getId()?>">Editer</a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>