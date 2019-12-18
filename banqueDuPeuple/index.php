<?php
    include 'header.php';
?>



<div style="width: 100%; text-align: center;"><img src="asset/css/img/bank.jpeg" style="height: 100px"></div>
<?php
if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
{
    echo 'LOGIN OU MOT DE PASSE INCORRECT...';
}
?>
<form method="POST" id="formConnex" action="connexion" style="text-align: center">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label >LOGIN</label>
            <input type="text" class="form-control" placeholder="LOGIN" name="login">
        </div>
        <div class="form-group col-md-6">
            <label >Password</label>
            <input type="password" class="form-control" placeholder="PASSWORD"name="mdp">
        </div>
    </div>


    <button type="submit" class="btn btn-primary" name="connexion">CONNEXION</button>
</form>


