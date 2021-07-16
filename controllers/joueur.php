<?php  
if ( !est_joueur()) header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == 'jeu'){
            extract(pagination(find_all_questions(),$_GET['page'])) ;           
            require(ROUTE_DIR.'view/joueur/jeu.html.php');
        }elseif ($_GET['view'] == 'top.score'){
            require(ROUTE_DIR.'view/joueur/top.score.html.php');
        }elseif ($_GET['view'] == 'inscription'){
            require_once(ROUTE_DIR.'view/security/connexion.html.php');
        }
    }
}   

function pagination ($data,$position){
  
    $nbrPage = 0;
    $page = 1;
    $suivant = 2;
    $nbrElement = NOMBRE_PAR_PAGE_DE_JEU;
    $precednt = 0;
  
  
  
  if (!isset($position)) {
    $page = 1 ;
     $_SESSION['user_admin'] =  $data;
     $nbrPage = nombrePageTotal( $_SESSION['user_admin'],  $nbrElement );
     $list_user= get_element_to_display( $_SESSION['user_admin'],$page,  $nbrElement );
   
  }
  
    if (isset($position)) {
        $page=$position;
     $suivant=$page+1;
     $precednt=$page-1;
         if (isset($_SESSION['user_admin'])) {
             $_SESSION['user_admin'] =  $data;
             $nbrPage = nombrePageTotal( $_SESSION['user_admin'],  $nbrElement );
             $list_user= get_element_to_display( $_SESSION['user_admin'],$page,  $nbrElement );
            }
  
     }
     return[
  
       'precednt'=> $precednt,
       'suivant'=>$suivant,
       'nbrPage'=>$nbrPage,
       'data'=>$list_user,
    
    ];
  
  }

?> 
