<?php
session_start();
require_once '../models/compteModel.php';
require_once '../models/clientModel.php';
if ($_SESSION == null)
{
    header("location:redirige");
}
else
{
   // include '../topBar.php';
   // echo '<div class="container">';
    echo "BONJOUR ".$_SESSION['nomComplet'];
    echo '<br>';
    if (isset($_GET['view']))
    {
        switch ($_GET['view'])
        {
            case 'compte':
                include 'listeCompte.php';
                break;
            case 'accueil':
                include 'accueil.php';
                break;
            case 'client':
                include 'listeClient.php';

                break;
            case 'AjoutCompte':

                include 'AjoutCompte.php';
                break;
        }
    }
    else
    {
        include_once '../accueil.php';
    }
   // echo '</div>';

}
//var_dump($_SESSION);
 include '../footer.php';
?>





