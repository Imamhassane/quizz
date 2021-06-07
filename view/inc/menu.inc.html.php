<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}

require(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php if (est_admin()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=admin&view=liste.question'?>">Liste des questions</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Liste des joueurs </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=security&view=inscription'?>">Creer admin  </a>
            </li>
            <?php endif ?>
            <?php if (est_joueur()):?>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=joueur&view=jeu'?>">Jeu </a>
            </li>
            <?php endif ?>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <?php if (est_connect()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=security&view=deconnexion'?>">Deconnexion<span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <?php endif ?>
    </div>
</nav>
<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>