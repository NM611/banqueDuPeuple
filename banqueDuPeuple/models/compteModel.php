<?php
require_once'bd.php';

function ajoutCompte($numero, $dateCreation, $solde, $idClient, $idGestCompte)
{
    //$idClient = insererClient();
    $lastId = lastInsertIdForTable("compte");
    $insert = "INSERT INTO compte VALUES ('$lastId','$numero','$dateCreation','$solde',$idClient,$idGestCompte, 1, 0, 0)";
    $connect=getConnection();
    $connect -> exec($insert);
    return $connect-> lastInsertId();
}
function genererNumero(){
    $sql = "SELECT max(id) FROM compte";
    $connect=getConnection();
    $array =  $connect -> query($sql) -> fetch();
    if($array == NULL){
        $id = 1;
    }else{
        $array[0]++;
        $id = $array[0];
    }
    $numero = "BDP_".date('d').date('m').date('Y')."_C".$id;
    return $numero;
}

// Creer une methode qui retourne la liste des comptes (getAllCompte).
function getAllCompte(){
    $sql = "SELECT * FROM compte";
    $connect=getConnection();
    return $connect -> query($sql) -> fetchall();
}
function getAllCompteAvecClients(){
    $sql = "SELECT Co.*,Cl.nom,Cl.prenom,Cl.adresse,Cl.tel, Cl.id as idCl FROM compte Co,client Cl WHERE Co.idClient = Cl.id ORDER BY Co.id DESC";
    $bd = getConnection();
    return $bd -> query($sql) -> fetchall();
}


function getCompteById($id)
{
    $sql = "SELECT * FROM compte WHERE id = '$id'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}




?>