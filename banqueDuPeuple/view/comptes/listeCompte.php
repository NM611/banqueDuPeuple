
    <?php
    include '../../header.php';
    require_once '../../models/compteModel.php';
    $comptesAvecCllients = getAllCompteAvecClients();

 ?>
    <div style="text-align: center">
        <a href="accueil"><button type="button" class="btn btn-primary btn-lg">ACCUEIL</button></a>
        <a href="gestClients"><button type="button" class="btn btn-primary btn-lg">GESTION CLIENT</button></a>
        <a href="gestComptes"><button type="button" class="btn btn-secondary btn-lg">GESTION COMPTE</button></a>
    </div>

    <br>

    <table id="listCompte" class="tableauPlein1" cellspacing="0">
    <tr>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th>NOM ET PRENOM CLIENT</th>
        <th id="A">ACTIONS</th>
    </tr>
    <?php
    foreach ($comptesAvecCllients as $key => $value) {
        if($value['etat']=='1'){
            echo '<tr>';
        }else{
            echo'<tr style="background-color:yellow">';
        }


        echo '<td>'.$value["numero"].'</td><td>'.$value["dateCreation"].'</td>
                <td>'.$value["solde"].'</td><td>'.$value["nom"].' '.$value["prenom"].'</td>';

                    echo '<td><button class="btn" idAsup='.$value['id'].'>SUPPRIMER COMPTE</button></td>
                     <td><button class="btn">OU MODIFIER COMPTE</button> </td></tr>';






    }


    ?>
</table>
<br>
<div class="aligner">
    <a href="nouveauCompte"><button class="btn">Nouveau Compte</button></a>
</div><br>

