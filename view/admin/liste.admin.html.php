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
            <h3 class="parametre mt-2">PARAMETER VOS QUESTIONS</h3>
            <div class="questionlistes">
                <table class="table ml-2 mt-2" >
                    <thead>
                        <tr>
                            <th scope="col">Prenom</th>
                            <th scope="col">Nom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diagne</td>
                            <td>Kandji</td>
                        </tr>
                        <tr>
                            <td>Khalifa</td>
                            <td>Ndiaye</td>
                        </tr>
                        <tr>
                            <td>Coudy</td>
                            <td>Wane</td>
                        </tr>
                        <tr>
                            <td>Yahya</td>
                            <td>Samb</td>
                        </tr>
                        <tr>
                            <td>Libasse</td>
                            <td>Mbaye</td>
                        </tr>
                        <tr>
                            <td>Seynabou</td>
                            <td>Ka</td>
                        </tr>
                        <tr>
                            <td>Demba</td>
                            <td>Ndoye</td>
                        </tr>
                        <tr>
                            <td>Aminata</td>
                            <td>Cisse</td>
                        </tr>
                    </tbody>                
                </table>
            
            </div>
            <div class="suivante mt-2 mr-1">
                <button type="submit" class="btn mt-2 mr-4">Suivant</button>
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