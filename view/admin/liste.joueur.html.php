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
                <table class="table m-2" >
                    <thead>
                        <tr>
                            <th scope="col">Prenom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diagne</td>
                            <td>Kandji</td>
                            <td>123 pts</td>
                        </tr>
                        <tr>
                            <td>Khalifa</td>
                            <td>Ndiaye</td>
                            <td>103 pts</td>
                        </tr>
                        <tr>
                            <td>Coudy</td>
                            <td>Wane</td>
                            <td>98 pts</td>
                        </tr>
                        <tr>
                            <td>Yahya</td>
                            <td>Samb</td>
                            <td>95 pts</td>
                            
                        </tr>
                        <tr>
                            <td>Libasse</td>
                            <td>Mbaye</td>
                            <td>90 pts</td>
                        </tr>
                        <tr>
                            <td>Seynabou</td>
                            <td>Ka</td>
                            <td>79 pts</td>
                        </tr>
                        <tr>
                            <td>Demba</td>
                            <td>Ndoye</td>
                            <td>72 pts</td>
                        </tr>
                        <tr>
                            <td>Aminata</td>
                            <td>Cisse</td>
                            <td>70 pts</td>
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