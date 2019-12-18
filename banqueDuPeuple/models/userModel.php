<?php
    require_once 'bd.php';
function verifierConnexion($login,$mdp)
{
    $sql = "SELECT * FROM utilisateur WHERE login='$login' AND password ='$mdp'";
    $connection=getConnection();
    return $connection-> query($sql)-> fetch();
    // fetch permet de retourner un seul resultat
}
?>
