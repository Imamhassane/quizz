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
            unset($_POST['valider']);
            unset($_POST['controllers']);
            unset($_POST['action']);
            inscription($_POST);
     
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
        if(login_exist($login)){
            $arrayError['login'] = 'Ce login existe déjà';
            $_SESSION['arrayError']=$arrayError;
            header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
            exit;
        }
        validation_password($password,'password',$arrayError);
        validation_champ($prenom,'prenom',$arrayError);
        validation_champ($nom,'nom',$arrayError);
        validation_date_naissance($datenaiss,'datenaiss',$arrayError,$test);
        if ($password != $confirmpassword){
            $arrayError['confirmpassword'] = 'Les deux password ne sont pas identiques';
        }               
        if (form_valid($arrayError)) {
            // appel du model
           
            // var_dump(file_get_contents(FILE_USERS, $json));
             unset($data['confirmpassword']);
            
            $data['role'] = est_admin()? "ROLE_ADMIN" : "ROLE_JOUEUR" ;
            add_user($data);
            if (est_admin()) {
                $data['role'] = 'ROLE_ADMIN';
               }else {
                    $data['role'] = 'ROLE_JOUEUR';
            }
            if (est_admin()){
                header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');
            }else{
                header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
            }
         }else {
             $_SESSION['arrayError']=$arrayError;
             header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
         }
}
function deconnexion():void{
    unset($_SESSION['userConnect']);
}
?>
