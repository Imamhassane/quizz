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
        }elseif($_GET['view'] == 'show.user'){
            require(ROUTE_DIR.'view/admin/show.user.html.php');
        }elseif($_GET['view'] == 'tableau.bord'){
            require(ROUTE_DIR.'view/admin/tableau.bord.html.php');
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['action'])){
        if($_POST['action']=='modifier') {
            unset($_POST['valider']);
            unset($_POST['controllers']);
            unset($_POST['action']);
            inscription($_POST);
            header('location:'.WEB_ROUTE.'?controllers=admin&view=show.user');
        }elseif($_POST['action']=='question') {
            if(isset($_POST['save'])){
                unset($_POST['controllers']);
                unset($_POST['action']); 
                unset($_POST['save']);
                question($_POST);
            }elseif(isset($_POST['plus']) && (empty($_POST['reponse_possible']))){
                $arrayError['test'] = "Le nombre de réponse possible est obligatoire";
                $_SESSION['arrayError'] = $arrayError;
                
                $_SESSION['arrayError'] = $arrayError;

                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
            }elseif(isset($_POST['plus']) && (!empty($_POST['reponse_possible']))){
                $inputPlus = $_POST['reponse_possible'];
                $_SESSION['plus'] = $inputPlus;

                $_SESSION['arrayError'] = $arrayError;

                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['reponse_possible']   = $_POST['reponse_possible'];
                header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
              
            }
          
        }
    }
}     
   
function question (array $data ):void{
    $arrayError = array();
    extract($data);
    validation_champ($question,'question',$arrayError);
    //type_reponse($type_reponse,'type_reponse',$arrayError);
    reponse($reponse,'reponse',$arrayError);
    
    validation_champ($nombre_de_points,'nombre_de_points',$arrayError);
    validation_champs($reponse_possible,'reponse_possible',$arrayError);


     if (form_valid($arrayError)) {
        // appel du model
             
        add_question($data);
        header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');
        }else{
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
     }
}


?> 