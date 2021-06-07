<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}

require(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
    <div class="container ">
        <div class="row">
            <div class="col" style="margin-top: 5%;">
                <div class="card-body ">
                    <div class="card"  style="padding:15px ">
                    <?php if (isset($arrayError['erreurConnexion'])):?>
                        <div class="alert alert-danger" style="height:40px;margin-top:8%" role="alert">
                            <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
                        </div>
                    <?php endif ?>
                    <form method="POST" action="<?=WEB_ROUTE?>" >
                        <input type="hidden" name="controllers" value="security">
                        <input type="hidden" name="action" value="connexion">
                    <div class="text-center  mb-4">
                            <h1>Formulaire de connexion</h1>
                    </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" class="form-control" name="login">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                                </small>   
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" >
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                </small>   
                            </div>
                            <button type="submit" class="btn btn-primary">Connexion</button>
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