<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
<!-- 
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-6">
                <div class="card"style="background-color:#FAFAFA;border-radius: 10px;" >
                    <div class="card-body">
                    <?php if (isset($arrayError['erreurConnexion'])):?>
                        <div class="alert alert-danger" style="height:40px" role="alert">
                            <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
                        </div>
                    <?php endif ?>
                        <form method="POST" action="<?=WEB_ROUTE?>">  
                            <input type="hidden" name="controllers" value="security">
                            <input type="hidden" name="action" value="inscription">
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" name="nom"style="background-color:#FAFAFA;border-radius: 4px;">
                                    <small class = "form-text text-danger">
                                        <?= isset($arrayError['nom']) ? $arrayError['nom'] : '' ;?>
                                    </small>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prénom</label>
                                    <input type="text" class="form-control" name="prenom"style="background-color:#FAFAFA;border-radius: 4px;">
                                    <small class = "form-text text-danger">
                                        <?= isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ;?>
                                    </small>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3" >
                                <label for="">Date de naissance</label>
                                <input type="text" class="form-control" name="datenaiss"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['datenaiss']) ? $arrayError['datenaiss'] : '' ;?>
                                </small>                                
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" style="" name="sexe" value="F" checked> Féminin
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexe" value="M"> Masculin
                                </label>
                            </div>
                            <small class = "form-text text-danger">
                                    <?= isset($arrayError['sexe']) ? $arrayError['sexe'] : '' ;?>
                            </small>   
                        </div>
                        <div class="form-group"  >
                                <label for="">Login</label>
                                <input type="text" class="form-control" name="login"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                                </small>
                        </div>
                        <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                </small>                                
                        </div>
                        <div class="form-group">
                                <label for="">Confirm password</label>
                                <input type="password" class="form-control" name="confirmpassword"style="background-color:#FAFAFA;border-radius: 4px;">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['confirmpassword']) ? $arrayError['confirmpassword'] : '' ;?>
                                </small>                                
                            </div>
                        
                            <button type="submit" class="btn btn-primary" style="border-radius: 4px;">S'inscrire</button>
                            
                            <div style="float:right;margin-top:20px;color:#0069D9;text-decoration:none;">
                                <a href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>" style="float:right;margin-top:0px"> Se connecter</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
                <div class="card" style="padding:15px">
                    <?php if (isset($arrayError['erreurConnexion'])):?>
                        <div class="alert alert-danger" style="height:40px" role="alert">
                            <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
                        </div>
                    <?php endif ?>
                    <form   method="POST" action="<?=WEB_ROUTE?>" class="mt-4">
                        <input type="hidden" name="controllers" value="security">
                        <input type="hidden" name="action" value="inscription">
                        <div class="text-center ">
                            <h1>Formulaire d'inscription</h1>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" name="nom">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['nom']) ? $arrayError['nom'] : '' ;?>
                                </small>
                            </div>
                        <div class="form-group col-md-6">
                                <label for="inputPassword4">Prenom</label>
                                <input type="text" class="form-control" name="prenom">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ;?>
                                </small>
                            </div>
                        </div>

                        <div class="form-check form-check-inline mb-4 mt-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexe" value="m"> Homme
                            </label>
                            <label class="form-check-label ml-5">
                                <input class="form-check-input" type="radio" name="sexe" value="f" checked> Femme 
                            </label>
                            <small class = "form-text text-danger">
                                    <?= isset($arrayError['sexe']) ? $arrayError['sexe'] : '' ;?>
                            </small>
                        </div>                                               
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Date de naissance</label>
                                <input type="text" class="form-control" name="datenaiss">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['datenaiss']) ? $arrayError['datenaiss'] : '' ;?>
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Email</label>
                                <input id="inputState" class="form-control" name="login">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                                </small>
                            </div>
                        </div>
                        
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Password</label>
                                <input type="password" class="form-control" name="password">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Confirm password</label>
                                <input type="password" class="form-control" name="confirmpassword">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['confirmpassword']) ? $arrayError['confirmpassword'] : '' ;?>
                                </small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                        <div style="float:right;margin-top:20px;color:#0069D9;text-decoration:none;">
                                <a href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>" style="float:right;margin-top:0px"> Se connecter</a>
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