<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');
?>
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="mt-4 ">
                <?php require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');?>
            </div>
        </div>
        <div class="pageAddAdmin col-md-8 p-0">
            <?php
            require(ROUTE_DIR.'view/security/inscript.html.php');
            ?>
        </div>
    </div>


</div>