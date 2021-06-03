<?php 
/*if ($_SERVER['REQUEST_METHOD']=='GET'){
    dd($_POST['login']);
    if (isset($_GET['view'])){
        if ($_GET['view']== 'connexion'){
            require_once(ROUTE_DIR.'view/security/connexion.html.php');
        }else{
            require_once(ROUTE_DIR.'view/security/inscription.html.php');
        }
    }else{
        require_once(ROUTE_DIR.'view/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['action'])){
        if ($_POST['action'] == 'connexion'){
            connexion($_POST['login'],$_POST['password']);
        }elseif($_POST['action'] == 'inscription'){
            inscription();
        }
    }
}
function connexion(string $login,string $password):void{
      
    $arrayError=array();
     validation_login($login,'login',$arrayError);
     validation_password($password,'password',$arrayError);
     
     if (form_valid($arrayError)) {
        // appel du model
        $user = find_login_password ($login , $password);
     
       // die();
        if (count($user)==0) {
          $arrayError['erreurConnexion'] = "login ou password incorrect ";
          $_SESSION['arrayError']= $arrayError;
          header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
        }else{
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
function inscription () : void{

}*/




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
           var_dump($_POST);
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
        if (count($user)==0) {
          $arrayError['erreurConnexion']="login ou password incorrect ";
          $_SESSION['arrayError']= $arrayError;
          header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
        }else{
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
        validation_champ($login,'login',$arrayError);
        validation_champ($password,'password',$arrayError);
        validation_champ($prenom,'prenom',$arrayError);
        validation_champ($nom,'nom',$arrayError);
        validation_champ($datenaiss,'datenaiss',$arrayError);
        if ($password != $confirmpassword){
            $arrayError['confirmpassword'] = 'Les deux password ne sont pas identiques';
        }

        if (form_valid($arrayError)) {
            // appel du model
            $user = find_login_password($login , $password ,  $prenom,  $nom, $datenaiss, $confirmpassword);
            if (count($user)==0) {
              $_SESSION['arrayError']= $arrayError;
              header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
            }else{
                $_SESSION ['userConnect']= $user;
                if ($user['role']=='ROLE_ADMIN') {
                    header('location:'.WEB_ROUTE.'?controllers=admin&view=liste.question');
                }elseif ($user['role']== 'ROLE_JOUEUR') {
                 header('location:'.WEB_ROUTE.'?controllers=admin&view=jeu');
                }
            }
         }else {
             $_SESSION['arrayError']=$arrayError;
             header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
         }
}
function deconnexion():void{
    
}
?>
