<?php

include '../../header.php';
require_once '../../models/clientModel.php';
$clients= getClients();
//var_dump($clients);

?>
<div style="text-align: center">
    <a href="accueil"><button type="button" class="btn btn-primary btn-lg">ACCUEIL</button></a>
    <a href="gestClients"><button type="button" class="btn btn-primary btn-lg">GESTION CLIENT</button></a>
    <a href="gestComptes"><button type="button" class="btn btn-secondary btn-lg">GESTION COMPTE</button></a>
</div>

<table  class="tableauPlein1" cellspacing="0">
    <tr>
        <th colspan="6">INFOS CLIENTS</th>
    </tr>
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ADRESSE</th>
        <th>TELEPHONE</th>
        <th id="A">AJOUTER COMPTE</th>
    </tr>


    <?php
    foreach ($clients as $key => $value) {?>
        <tr>
            <td><?= $value['nom']?></td>
            <td><?= $value['prenom']?></td>
            <td><?= $value['adresse']?></td>
            <td><?= $value['tel']?></td>
            <td><a href="AjoutCompte"><button class="btn" idA="<?=$value['id']?>"</button>AJOUT COMPTE</a>  </td>



        </tr>
        <?php
    }

    ?>


</table>

<?php

?>

