<?php  
if (!est_admin()) header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
       
        if ($_GET['view'] == 'liste.question'){
            require(ROUTE_DIR.'view/admin/liste.question.html.php');
        }elseif ($_GET['view'] == 'liste.joueur'){
            require(ROUTE_DIR.'view/admin/liste.joueur.html.php');
        }elseif($_GET['view'] == 'creer.admin'){
            require(ROUTE_DIR.'view/admin/creer.admin.html.php');
        }elseif($_GET['view'] == 'creer.question'){
            require(ROUTE_DIR.'view/admin/creer.question.html.php');
        }elseif($_GET['view'] == 'liste.admin'){
            require(ROUTE_DIR.'view/admin/liste.admin.html.php');
        }elseif($_GET['view'] == 'tableau.bord'){
            require(ROUTE_DIR.'view/admin/tableau.bord.html.php');
        }
    }
}            
?> 