
<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require(ROUTE_DIR.'view/inc/header.inc.html.php');
if (est_admin()){
    require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');
}
?>


<div class="container col-md-12 mt-5 ">
    <?php if (isset($arrayError['erreurConnexion'])):?>
        <div class="alert alert-danger" style="height:40px" role="alert">
            <?= isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : '' ; ?>
        </div>
    <?php endif ?>
   <form method="POST" action="<?=WEB_ROUTE?>" class="mt-4">
                        <input type="hidden" name="controllers" value="security">
                        <input type="hidden" name="action" value="inscription">
        <div class="card" >
            <div class="Accroche">
                <h2>S'inscrire</h2>
                <p>Pour tester votre niveau de culture générale</p>
            </div>
            
                <div class="card-body">


                <div class="form-row ">
                    <div class="col-md-6">
                        <label for="">Prenom</label>
                        <input type="text" class="form-control " name="prenom" placeholder="AAAA">
                        <small class = "form-text text-danger">
                           <?= isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ;?>
                        </small>
                    </div>
                    <div class=" col-md-6">
                        <label for="">Nom</label>
                        <input type="text" class="form-control " name="nom" placeholder="BBBB">
                        <small class = "form-text text-danger">
                                    <?= isset($arrayError['nom']) ? $arrayError['nom'] : '' ;?>
                                </small>
                    </div> 
                </div> 
                <div class="col-md-">
                            <label for="">Login</label>
                            <input type="text" class="form-control " name="login" placeholder="abc@gmail.com">
                            <small class = "form-text text-danger">
                                <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                            </small>
                    </div> 
                <div class="form-row">
                    <div class="col-md-6">
                            <label for="">Password</label>
                            <input type="password" class="form-control " name="password" placeholder=".........">
                            <small class = "form-text text-danger">
                            <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                            </small>
                    </div> 
                    <div class="col-md-6">
                        <label for="">Confirm password</label>
                        <input type="password" class="form-control " name="confirmpassword" placeholder=".........">
                        <small class = "form-text text-danger">
                            <?= isset($arrayError['confirmpassword']) ? $arrayError['confirmpassword'] : '' ;?>
                        </small>
                    </div> 
                    
                </div>
                     


                    <button type="submit" class="btn mt-4">Inscription</button>
                    <div class="inscript">
                        <a href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>" class=inscript-link> Connexion</a> 
                    </div>
                </div>
        </div>
    </form>
</div>

<!-- TODO: This is for server side, there is another version for browser defaults -->



<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>
<style>

 
</style>