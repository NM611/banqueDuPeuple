<?php
    session_start();
    require_once '../models/userModel.php';

    if(isset($_POST['connexion'])){

        extract($_POST);
        //var_dump($_POST);
        $user= verifierConnexion($login,$mdp);

        if ($user!=null){

            $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
            $_SESSION['idUser'] = $user['id'];
            header('location:indexB');
        }else{
            header('location:errorConnexions');
        }

    }

if (isset($_GET['deconnexion']))
{
    session_unset();
    $_SESSION = array();
    header('location:redirige');
}

?>

