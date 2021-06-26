<?php 


if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['view'])) {
       if ($_GET['view']=='connexion') {
        require(ROUTE_DIR.'view/security/connexion.html.php');
       }elseif($_GET['view']=='inscription') {
        require(ROUTE_DIR.'view/security/inscription.html.php');
       }elseif($_GET['view']=='deconnexion') {
           deconnexion();
        require(ROUTE_DIR.'view/security/connexion.html.php');
       }elseif($_GET['view']=='modifier') {
        $id=$_GET['id'];
        $user = find_user_id($id);
        require(ROUTE_DIR.'view/admin/creer.admin.html.php');
        }
    }else {
        require(ROUTE_DIR.'view/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD']=='POST')  {
    if (isset($_POST['action'])) {
       if ($_POST['action']=='connexion') {
           connexion($_POST['login'],$_POST['password']);
       }elseif ($_POST['action']=='inscription') {
            unset($_POST['valider']);
            unset($_POST['controllers']);
            unset($_POST['action']);
            unset($data['confirmpassword']);
            inscription($_POST);
        }elseif ($_POST['action']=='modifier') {
            unset($_POST['valider']);
            unset($_POST['controllers']);
            unset($_POST['action']);
            inscription($_POST);
            unset($data['confirmpassword']);
            //header('location:'.WEB_ROUTE.'?controllers=admin&view=show.user');

        }
    }
}
function connexion(string $login,string $password):void{
    $arrayError=array();
     validation_login($login,'login',$arrayError);
     validation_password($password,'password',$arrayError);

     if (form_valid($arrayError)) {
        // appel du model
        $user = find_login_password($login , $password);
        foreach ($user as $key) {
           echo $user['role'];
        }
        if (count($user)==0) {
          $arrayError['erreurConnexion']="login ou password incorrect ";
          $_SESSION['arrayError']= $arrayError;
          header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
        }else{
            session_start();
            $_SESSION ['userConnect']= $user;
            if ($user['role']=='ROLE_ADMIN') {
                header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');
            }elseif ($user['role']== 'ROLE_JOUEUR') {
                header('location:'.WEB_ROUTE.'?controllers=joueur&view=jeu');
            }
        }
     }else {
         $_SESSION['arrayError']=$arrayError;
         header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
     }
}
function inscription(array $data ):void{
    $arrayError=array();
    extract($data);
        validation_login($login,'login',$arrayError);
        if(login_exist($login) && !isset($data['id'])){
            $arrayError['login'] = 'Ce login existe déjà';
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
   
     }
        validation_password($password,'password',$arrayError);
        validation_champ($prenom,'prenom',$arrayError);
        validation_champ($nom,'nom',$arrayError);
        if ($password != $confirmpassword){
            $arrayError['confirmpassword'] = 'Les deux password ne sont pas identiques';
        }               
        if (form_valid($arrayError)) {

            $data['role'] = est_admin()? "ROLE_ADMIN" : "ROLE_JOUEUR" ;
            
            if (est_admin()) {
                $data['role'] = 'ROLE_ADMIN';
                 header('location:'.WEB_ROUTE.'?controllers=admin&view=show.user');
               }else {
                $data['role'] = 'ROLE_JOUEUR';
                 header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
            } 

            if(isset($data['id'])){
                if(est_admin()){
                modif_user($data);
                header('location:'.WEB_ROUTE.'?controllers=admin&view=show.user');
                }
            }

            if(empty($data['id'])){
                add_user($data);
            }
              

          
             
        }else{
            if(est_admin()){
                $_SESSION['arrayError']=$arrayError;
                header('location:'.WEB_ROUTE.'?controllers=admin&view=creer.admin');
            }else{
                $_SESSION['arrayError']=$arrayError;
                header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
            }
            
         }
}

function deconnexion():void{
    unset($_SESSION['userConnect']);
}
/* function supprimer(){
    $id = $_SESSION['id'];
    $ok = suppression_user($id);
    if($ok){
        
    }
} */

?>
