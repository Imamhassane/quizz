<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}

require(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
<div class="container-fluid">
<img class="img-fluid " src="<?php echo  WEB_ROUTE.'img/logo.png';?>" alt="" srcset="">

    <h1>Le plaisir de jouer</h1>
</div>             
<div class="container col-md-8 mt-5 ">
    <?php if (isset($arrayError['erreurConnexion'])):?>
            <div class="alert alert-danger"  role="alert">
                 <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
            </div>
    <?php endif ?>
    <form method="POST" action="<?=WEB_ROUTE?>">
        <input type="hidden" name="controllers" value="security">
        <input type="hidden" name="action" value="connexion">
        <div class="card">
            <div class="accrocheCOn">
                <h5>Login form</h5>
            </div>
                <div class="card-body">
                    <div class="input-group mt-3" >
                        <input type="text" class="form-control " name="login" placeholder="login">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                    </div> 
                    <small class = "form-text text-danger">
                                <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                    </small> 
                    <div class="input-group mt-5">
                        <input type="password" class="form-control " name="password" placeholder="Password">
                                <span class="input-group-text"> <i class="fa fa-lock"></i></span>
                        <div class="input-group-append">
                        </div>
                        
                    </div> 
                    <small class = "form-text text-danger">
                        <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                    </small> 
                    <button type="submit" class="btn mt-4">Connexion</button>
                    <div class="inscript">
                        <a href="<?=WEB_ROUTE.'?controllers=security&view=inscription'?>" class=inscript-link> S'inscrire en tant que joueur</a> 
                    </div>
                </div>
        </div>
    </form>
</div>

<!-- TODO: This is for server side, there is another version for browser defaults -->



<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>