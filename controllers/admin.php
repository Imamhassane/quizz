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
       }elseif($_GET['view'] == 'edit'){
            $_SESSION['id']=$_GET['id'];
            $id = $_SESSION['id'];
            $question = find_question_id($id);
            require(ROUTE_DIR.'view/admin/creer.question.html.php');
        }elseif($_GET['view'] == 'supprimer'){
            $_SESSION['id']=$_GET['id'];
            $id = $_SESSION['id'];
            $question = find_question_id($id);
            require(ROUTE_DIR.'view/admin/confirme.html.php');
        }elseif($_GET['view'] == 'confirme'){
            $_SESSION['id']=$_GET['id'];
            $id = $_SESSION['id'];
            $question = find_question_id($id);
           $ok = suppression_question($id);
            require(ROUTE_DIR.'view/admin/liste.question.html.php');
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['action'])){
        if($_POST['action']=='question') {
            if(isset($_POST['save'])){
                unset($_POST['controllers']);
                unset($_POST['action']); 
                unset($_POST['save']);
                $inputPlus = $_POST['reponse_possible'];
                $_SESSION['plus'] = $inputPlus;

                $_SESSION['arrayError'] = $arrayError;

                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['reponse_possible']   = $_POST['reponse_possible'];
                $_SESSION['type_de_reponse']   = $_POST['type_de_reponse'];

                question($_POST);
            }elseif(isset($_POST['plus']) && (empty($_POST['reponse_possible']))){
                $arrayError['test'] = "Le nombre de réponse possible est obligatoire";
                $_SESSION['arrayError'] = $arrayError;
               

                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['type_de_reponse']   = $_POST['type_de_reponse'];

                

                header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
            }elseif(isset($_POST['plus']) && (!empty($_POST['reponse_possible']))){
                $inputPlus = $_POST['reponse_possible'];
                $_SESSION['plus'] = $inputPlus;

                $_SESSION['arrayError'] = $arrayError;

                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['reponse_possible']   = $_POST['reponse_possible'];

                $_SESSION['type_de_reponse']   = $_POST['type_de_reponse'];
                header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
              
            }
          
        }elseif($_POST['action']=='edit'){ 
            if(isset($_POST['save'])){
                unset($_POST['controllers']);
                unset($_POST['action']); 
                unset($_POST['save']);
                question($_POST);
                $value=$_SESSION['id'];
                header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question'); 
            }elseif(isset($_POST['plus'])  && (empty($_POST['reponse_possible']))){
                $arrayError['test'] = "Le nombre de réponse possible est obligatoire";
                $_SESSION['arrayError'] = $arrayError;
                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['type_de_reponse']   = $_POST['type_de_reponse'];
                
                $value=$_SESSION['id'];
                header('location:'.WEB_ROUTE.'?controllers=admin&view=edit&id='.$value['id']);
            } elseif(isset($_POST['plus']) && (!empty($_POST['reponse_possible']))){
                $_SESSION['question']  = $_POST['question'];

                $_SESSION['nombre_de_points'] = $_POST['nombre_de_points'];

                $_SESSION['type_de_reponse']   = $_POST['type_de_reponse'];
                
                $value=$_SESSION['id'];
                header('location:'.WEB_ROUTE.'?controllers=admin&view=edit&id='.$value['id']);
            }
        } 
    }
}     
   
function question (array $data ):void{
    $arrayError = array();
    extract($data);
    validation_champ($question,'question',$arrayError);
    reponse($reponse,'reponse',$arrayError);
    validation_champ($nombre_de_points,'nombre_de_points',$arrayError);
    validation_champs($reponse_possible,'reponse_possible',$arrayError);


     if (form_valid($arrayError)) {
            if(isset($data['id'])){
                if(est_admin()){
                modif_question($data);
                header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');
                }
            }

            if(empty($data['id'])){

                add_question($data);
                header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');        
            }
        }else{
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.question');
     }
}

function pagination($data,$position){
  $nbrPage=0;
  $page=1;
  $suivant=2;
  $nbrElement= NOMBRE_PAR_PAGE;
  $precednt=0;

}



?> 