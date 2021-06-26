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
                <?php 
                     $json=file_get_contents(FILE_USERS);
                     $arrayUser= json_decode($json,true);        
                ?>
                <table class="table  table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                    <?php foreach ($arrayUser as $user ):?>
                    <?php if($user['role'] =='ROLE_ADMIN'):?>
                        <tr>
                            <td><?=$user['prenom'].' '.$user['nom']?></td>
                            <td><?=$user['role']?></td>
                            <td>
                                <a name="" id="" class="btn btn1 " href="#" role="button">Supprimer <i class="far fa-trash-alt  "></i></a>
                                <a name="" id="" class="btn btn-info" href="<?= WEB_ROUTE.'?controllers=security&view=modifier&id='.$user['id']?>" role="button">Modifier <i class="fas fa-edit "></i></a>
                            </td>
                        </tr>
                        <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            
            <div class="suivante mt-1 mr-1">
                <button type="submit" class="btn1 btn mt-0 mr-4">Suivant</button>
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
        background-color: #c90017;
        color: #fff;

    }
    .btn{
        color: #fff;

    }

    td a:hover{
        background-color: #c90017;
        color: #fff;
    }
</style> 