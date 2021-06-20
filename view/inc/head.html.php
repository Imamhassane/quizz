<?php
    require_once(ROUTE_DIR.'view/inc/header.inc.html.php');
    require(ROUTE_DIR.'view/inc/footer.inc.html.php');

?>
<div class="container-fluid">
    <img class="img-fluid " src="<?php echo  WEB_ROUTE.'img/logo.png';?>" alt="" srcset="">

    <h1>Le plaisir de jouer</h1>
</div>
<div class="container menu-deconnect">
    
    <div class="row mt-4  deconnexion">
    <h6 class="text-white m-4">PARAMETER VOS QUIZZ</h6>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <div class="openMenu"><i class="fa fa-bars"></i></div>
                    <ul class="mainMenu ">
                        <div class="d-flex mt-5 menu-mobile ">
                            <li><a class="  mt-4" href="<?= WEB_ROUTE.'?controllers=admin&view=liste.question'?>">Liste des question</a></li>
                            <i class="fas fa-list-ul ml-auto ask"></i>
                        </div>
                        <div class="d-flex menu-mobile mt-4 ">
                            <li><a class=" mt-1 " href="<?= WEB_ROUTE.'?controllers=admin&view=liste.joueur'?>">Liste des joueurs</a></li>
                            <i class="fas fa-list-ol  ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile  ">
                            <li><a class=" mt-1" href="<?= WEB_ROUTE.'?controllers=admin&view=creer.admin'?>">Creer admin  </a></li>
                            <i class="fas fa-plus ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile ">
                            <li>
                                <a class="  mt-1" href="
                            <?= WEB_ROUTE.'?controllers=admin&view=creer.question'?>">Creer Questions</a></li>
                            <i class="fas fa-plus ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile ">
                            <li>
                                <a class=" mt-1" href="
                            <?= WEB_ROUTE.'?controllers=admin&view=liste.admin'?>">Liste des admins</a></li>
                            <i class="fas fa-list-ul ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile ">
                            <li><a class="  mt-1" href="#">Modifier</a></li>
                            <i class="fas fa-edit ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile ">
                            <li><a class="mt-1 " href="#">Supprimer</a></li>
                            <i class="far fa-trash-alt ml-auto mr-2 cursor"></i>
                        </div>
                        <div class="d-flex mt-4 menu-mobile mb-5">
                             <li><a class="  mt-0" href="#">Tableau de bord</a></li>
                             <i class="fas fa-signal ml-auto mr-2 cursor"></i>

                        </div> 
                        <?php if (est_connect()):?>
                                <li class="nav-item active ml-auto mr-auto mt-4">
                                    <a class="deconnect" class="nav-link  " href="<?= WEB_ROUTE.'?controllers=security&view=deconnexion'?>" >Deconnexion</a>
                                </li>
                            <?php endif ?>
                        <div class="closeMenu"><i class="fa fa-times"></i></div>

                    </ul>
            <?php if (est_connect()):?>
                <li class="nav-item active">
                    <a class="deconnect mt-4" class="nav-link " href="<?= WEB_ROUTE.'?controllers=security&view=deconnexion'?>" >Deconnexion</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
    
    <script>
    const mainMenu = document.querySelector('.mainMenu');
    const closeMenu = document.querySelector('.closeMenu');
    const openMenu = document.querySelector('.openMenu');




    openMenu.addEventListener('click', show);
    closeMenu.addEventListener('click', close);
    mainMenu.addEventListener('click', close);

    function show() {
        mainMenu.style.display = 'flex';
        mainMenu.style.top = '0';
    }

    function close() {
        mainMenu.style.top = '100%';
    }
</script>

<style>
    
@media screen and (max-width:767px ){
        
    .cursor{
    margin-top:10px
}
.ask{
    margin-top:30px;
    margin-right: 21px;

}
}
</style>

