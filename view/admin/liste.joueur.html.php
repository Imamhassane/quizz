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
                <?php 
                     $json=file_get_contents(FILE_USERS);
                     $arrayUser= json_decode($json,true);        
                ?>
                <table class="table table-bordered m-2" style="width: 97%;">
                    <thead>
                        <tr style="border-bottom:1px solid #ddd">
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Role</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($arrayUser as $user ):?>
                    <?php if($user['role'] !='ROLE_ADMIN'):?>
                        <tr>
                            <td><?=$user['prenom']?></td>
                            <td><?=$user['nom']?></td>
                            <td><?=$user['score']?></td>

                        </tr>
                        <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            
                <div class="suivante mt-1 mr-1">
                    <button type="submit" class="btn mt-0 mr-4">Suivant</button>
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
    </style>