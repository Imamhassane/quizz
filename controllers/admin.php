<?php  
if ( est_admin()) header('location:'.WEB_ROUTE.'?controllers=security&view=liste.question');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
       
        if ($_GET['view'] == 'liste.question'){
            require(ROUTE_DIR.'view/admin/liste.question.html.php');
        }elseif ($_GET['view'] == 'jeu'){
            require_once(ROUTE_DIR.'view/joueur/jeu.html.php');
        }
    }
}            
?> 