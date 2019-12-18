<?php $numero = genererNumero(); ?>

<div style="text-align: center">
    <a href="accueil"><button type="button" class="btn btn-primary btn-lg">ACCUEIL</button></a>
    <a href="gestClients"><button type="button" class="btn btn-primary btn-lg">GESTION CLIENT</button></a>
    <a href="gestComptes"><button type="button" class="btn btn-secondary btn-lg">GESTION COMPTE</button></a>
</div>

<form method="POST" action="ajoutCompte">
    <fieldset id="newAccount" hidden="hidden">
        <legend>INFOS COMPTE</legend>
        <table class="tab_complet">
            <tr>
                <td>NUMERO COMPTE</td>
                <td class="formul_tab"><input class="champsNewC" type="text" name="numero" id="numero"
                                              value="<?= $numero ?>" readonly/></td>

            </tr>
            <tr>
                <td>SOLDE</td>
                <td class="formul_tab"><input class="champsNewC" placeholder="SOLDE" type="number" name="solde"
                                              id="solde"></td>

            </tr>
            <tr>
                <td colspan="2"><input class="btn" type="submit" name="ajoutCompte" value="Valider"></td>
            </tr>
        </table>
    </fieldset>
</form>
