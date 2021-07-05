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
            <h3 class="parametre mt-2 ">LISTE DES UTILISATEURS</h3>
            
                <table class="table  table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                    <?php foreach ($data as $user ):?>
                        <tr>
                            <td><?=$user['prenom'].' '.$user['nom']?></td>
                            <td><?=$user['role']?></td>
                            <td>
                                <a name="" id="" class="btn btn1 mr-4" href="<?= WEB_ROUTE.'?controllers=security&view=modifier&id='.$user['id']?>" role="button">Modifier <i class="fas fa-edit "></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            
                <?php 
                     $json=file_get_contents(FILE_USERS);
                     $arrayUser= json_decode($json,true); 
                     $arrayadmin[]=  find_all_admins();
                ?>
           <div class="suivan ">
                <?php if(($_GET['view'] == 'show.user') && count($arrayadmin) > 5 ): ?>
                            <a name="" id="" class="btn btn-red disabled  mb-3" href="<?=WEB_ROUTE.'?controllers=admin&view=show.user'; ?>" role="button">Suivant</a>
                        <?php endif ?>
                        <?php if($_GET['page'] <= $nbrPage-1 && count($arrayadmin) <= 5): ?>
                            <a name="" id="" class="btn  btn-red mb-3" href="<?=WEB_ROUTE.'?controllers=admin&view=show.user&page='.$suivant; ?>" role="button">Suivant</a>
                        <?php endif ?>
                    <div class="float-left ml-2">
                        <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                            <a name="" id="" class="btn btn-red disabled  mb-3" href="<?=WEB_ROUTE.'?controllers=admin&view=show.user&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php else: ?>
                            <a name="" id="" class="btn btn-red  mb-3" href="<?=WEB_ROUTE.'?controllers=admin&view=show.user&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php endif ?>
                    </div>
        </div>
        </div>
    </div>
<style>
    .table th {
        padding: 0;
        
    }
    .table td {
        padding: 10px;
    }
    .btn1{
        background-color: gray;
        color: #fff;

    }
    .btn{
        color: #fff;

    }

    td a:hover{
        background-color: #c90017;
        color: #fff;
    }
    .btn-red{
    background-color: #c90017;
    color:#fff;
}
.suivan , a:hover{
    color : #fff
}
</style> 