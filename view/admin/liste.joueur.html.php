<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');

?>
  <div class="row">
        <div class="col-md-4 mt-5">
            <div class="mt-4 ">
                <?php require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');?>
            </div>
        </div>
        <div class="pageListJoueur col-md-8 p-0">
            <h3 class="parametre mt-2 ">PARAMETER VOS QUESTIONS</h3>
               
                <table class="table table-bordered m-2" style="width: 97%;">
                    <thead>
                        <tr style="border-bottom:1px solid #ddd">
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Role</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $user ):?>
                        <tr>
                            <td><?=$user['prenom'].' '.$user['nom']?></td>
                            <td><?=$user['role']?></td>
                            <td><?=$user['score']?></td>

                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php 
                     $json=file_get_contents(FILE_USERS);
                     $arrayUser= json_decode($json,true); 
                     $arrayjoueur[]=  find_all_joueurs();
                ?>
                <div class="suivan ">
                        <?php if(($_GET['view'] == 'liste.joueur') && count($arrayjoueur) > 5 ): ?>
                            <a name="" id="" class="btn btn-red disabled  " href="<?=WEB_ROUTE.'?controllers=admin&view=liste.joueur'; ?>" role="button">Suivant</a>
                        <?php endif ?>

                        <?php if($_GET['page'] <= $nbrPage-1 && count($arrayjoueur) <= 5): ?>
                            <a name="" id="" class="btn  btn-red " href="<?=WEB_ROUTE.'?controllers=admin&view=liste.joueur&page='.$suivant; ?>" role="button">Suivant</a>
                        <?php endif ?>

                    <div class="float-left ml-2 ">
                        <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                            <a name="" id="" class="btn btn-red disabled  " href="<?=WEB_ROUTE.'?controllers=admin&view=liste.joueur&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php else: ?>
                            <a name="" id="" class="btn btn-red  " href="<?=WEB_ROUTE.'?controllers=admin&view=liste.joueur&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php endif ?>
                    </div>
              </div>
        </div>
    </div>
    
    <style>
    .table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: none;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: none;
}
.btn-red{
    background-color: #c90017;
    color:#fff;
}
.suivant , a:hover{
    color : #fff
}
    </style>