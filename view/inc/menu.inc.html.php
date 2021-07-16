<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
<div class="for-mobile">
    <div class="mt-4 admin-profil">
            <h2>Imam</h2>
            <h2>Hassan</h2>
    </div>
    <div class="menu">
        <?php if(est_admin()):?>
            <div class="d-flex ">
                <a class=" ml-3 mt-4" href="<?= WEB_ROUTE.'?controllers=admin&view=liste.question'?>">Liste des questions</a>
                <i class="fas fa-list-ul ml-auto mt-4 mr-2 cursor"></i>
            </div>
            <div class="d-flex mt-3">
                <a class=" ml-3 mt-0 " href="<?= WEB_ROUTE.'?controllers=admin&view=liste.joueur'?>">Liste des joueurs</a>
                <i class="fas fa-list-ol  ml-auto mr-2 cursor"></i>
            </div>            
            <div class="d-flex mt-3">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=creer.admin'?>">Creer admin  </a>
                <i class="fas fa-plus ml-auto mr-2 cursor"></i>
            </div>
            <div class="d-flex mt-3">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=creer.question'?>">Creer questions</a>
                <i class="fas fa-plus ml-auto mr-2 cursor"></i>
            </div>
            <div class="d-flex mt-3">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=show.user'?>">Liste des administrateurs</a>
                <i class="fas fa-list-ul ml-auto mr-2 cursor"></i>
            </div>
            <div class="d-flex mt-3">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=tableau.bord'?>">Tableau de bord</a>
                <i class="fas fa-signal ml-auto mr-2 cursor"></i>
            </div>  
            <?php endif ?>
            <?php if(est_joueur()):?>
        
    
            
            <?php endif ?>
    </div>
</div>
<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>

