<?php
session_start();
require_once '../models/compteModel.php';

if(isset($_POST['ajoutCompte'])){
    extract($_POST);
    //var_dump($_POST);
    $dateCreation = date("d-m-Y");
    $idCli = insererClient($cni, $nom, $prenom, $adresse,  $tel);
    $idGestCompte = $_SESSION['idUser'];
    $idCompte = ajoutCompte($numero, $dateCreation, 0, $idCli, $idGestCompte);
    if ($idCompte > 0) {
        $idTypeOperation = getTypeOpByNom("depot")['id'];
        $numeroOp = genererNumeroOperation();
        if(depot($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte) > 0)
        {
            header('location:/finance.sn/view/indexFinance.php?view=nouveauCompte&ok=1');
        }else{
            header('location:/finance.sn/view/indexFinance.php?view=nouveauCompte&ok=0');
        }
    }
}


if (isset($_GET['etatC'])) {
    $idCpt= $_GET['etatC'];
    //echo "$idCpt";

    if(etatChange($idCpt) > 0) {
        header('location:/finance.sn/view/indexFinance.php?view=compte&ok=1');
    }else{
        header('location:/finance.sn/view/indexFinance.php?view=compte&ok=0');
    }
}

if (isset($_GET['compteNew'])) {
    extract($_POST);
    $dateCreation = date("d-m-Y");
    $idCli=$AJOUTER;
    //var_dump($idCLIENT);
    $idGestCompte = $_SESSION['idUser'];
    $idCompte = ajoutCompte($numero, $dateCreation, $solde, $idCli, $idGestCompte);
    if ($idCompte > 0) {
        $idTypeOperation = getTypeOpByNom("depot")['id'];
        $numeroOp = genererNumeroOperation();
        if(depot($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte) > 0)
        {
            header('location:gestComptes');
        }else{
            header('location:/finance.sn/view/indexFinance.php?view=client&ok=0');
        }
    }

}
?>


