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
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-4" href="<?= WEB_ROUTE.'?controllers=admin&view=liste.question'?>">Liste des question</a>
                <img class=" ml-auto mt-4 mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-liste-active.png';?>" alt="" srcset="">
            </div>
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0 " href="<?= WEB_ROUTE.'?controllers=admin&view=liste.joueur'?>">Liste des joueurs</a>
                <img class=" ml-auto mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-ajout.png';?>" alt="" srcset="">

            </div>            
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=creer.admin'?>">Creer admin  </a>
                <img class=" ml-auto mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-liste.png';?>" alt="" srcset="">
            </div>
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=creer.question'?>">Creer Questions</a>
                <img class=" ml-auto mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-ajout.png';?>" alt="" srcset="">
            </div>
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0" href="<?= WEB_ROUTE.'?controllers=admin&view=liste.admin'?>">Liste des admins</a>
                <img class=" ml-auto mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-liste.png';?>" alt="" srcset="">
            </div>
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0" href="#">Modifier</a>
                <img class=" ml-auto mr-2 cursor" src="<?php echo  WEB_ROUTE.'img/ic-liste.png';?>" alt="" srcset="">
            </div>  
            <div class="d-flex mt-4">
                <a class=" ml-3 mt-0" href="#">Supprimer</a>
                <img class=" ml-auto mr-2 supprimer" src="<?php echo  WEB_ROUTE.'img/ic-supprimer.png';?>" alt="" srcset="">
            </div> 
            <?php endif ?>
            <?php if(est_joueur()):?>
        
    
            
            <?php endif ?>
    </div>
</div>
<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>

