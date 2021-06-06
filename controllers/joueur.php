<?php  
//if ( !est_admin()) header('location:'.WEB_ROUTE.'?controllers=security&view=jeu');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == 'jeu'){
            require(ROUTE_DIR.'view/joueur/jeu.html.php');
        }elseif ($_GET['view'] == 'inscription'){
            require_once(ROUTE_DIR.'view/security/connexion.html.php');
        }
    }
}   
         
?> 