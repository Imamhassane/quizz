<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require(ROUTE_DIR.'view/inc/header.inc.html.php');
?>

<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-6" >
                <div class="card"style="background-color:#FAFAFA;border-radius: 10px;" >
                    <div class="card-body">
                    <?php if (isset($arrayError['erreurConnexion'])):?>
                        <div class="alert alert-danger" style="height:40px" role="alert">
                            <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
                        </div>
                    <?php endif ?>
                        <form method="POST" action="<?=WEB_ROUTE?>">  
                        <input type="hidden" name="controllers" value="security">
                        <input type="hidden" name="action" value="connexion">
                            <div class="form-group">
                                <label for="">Login</label>
                                <input type="text" class="form-control" name="login"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Mot de pass</label>
                                <input type="password" class="form-control" name="password"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                </small>                                
                            </div>
                            <button type="submit" class="btn btn-primary" name="valider" style="border-radius: 4px;">Se connecter</button>

                            <div style="float:right;margin-top:20px;color:#0069D9;text-decoration:none;">
                                <span>Vous n'avez pas de compte ?</span></br>
                                <a href="<?=WEB_ROUTE.'?controllers=security&view=inscription'?>" style="float:right;margin-top:0px"> S'inscrire</a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>