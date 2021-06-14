<?php
 //require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');
    require_once(ROUTE_DIR.'view/inc/header.inc.html.php');
    require(ROUTE_DIR.'view/inc/footer.inc.html.php');

?>
<div  class="container mt-3"  style="padding:0px">
    <div class="row">
        <div class="col">
                    <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                   
                        <h5>CREER ET PARAMETER VOS QUIZZ</h5>
                    
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <?php if (est_connect()):?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=security&view=deconnexion'?>">Deconnexion<span class="sr-only">(current)</span></a>
                        </li>
                        </ul>
                        <?php endif ?>
                </div>
            </nav>
       
    </div>
</div>
