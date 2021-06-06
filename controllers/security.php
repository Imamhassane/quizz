<?php 




if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['view'])) {
       if ($_GET['view']=='connexion') {
        require(ROUTE_DIR.'view/security/connexion.html.php');
       }else {
        require(ROUTE_DIR.'view/security/inscription.html.php');
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
        //foreach ($user as $key) {
        //    echo $user['role'];
        //}
       // die;
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
                header('location:'.WEB_ROUTE.'?controllers=admin&view=jeu');
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
        validation_password($password,'password',$arrayError);
        validation_champ($prenom,'prenom',$arrayError);
        validation_champ($nom,'nom',$arrayError);
       separateur($datenaiss,'datenaiss',$arrayError);

        if ($password != $confirmpassword){
            $arrayError['confirmpassword'] = 'Les deux password ne sont pas identiques';
        }               

        if (form_valid($arrayError)) {
            // appel du model
        //     if(login_exist($login)){
        //         $arrayError = 'Ce login existe déjà';
        //         $_SESSION['arrayError']=$arrayError;
        //         header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
        //         exit;
        //     }
        //    unset($data['confirmpassword']);
        //     $data['role']= est_admin()? "ROLE_ADMIN" : "ROLE_JOUEUR" ;
        //     add_user($data);
         }else {
             $_SESSION['arrayError']=$arrayError;
             header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
         }
}
function deconnexion():void{
    
}
?>
