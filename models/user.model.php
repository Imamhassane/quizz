<?php
/*function find_login_password(string $login , string $password){
 
    //1 lire contenu fichier
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
    //2 convertir le json en tableau 
    $arrayUser = json_decode($json, true);
  foreach ($arrayUser as $user ) {
    if ($user['login'] == $login && $user['password'] == $password){
      return $user;
    }
  }
  return [];
}*/

function find_all_users(){
  $json =file_get_contents(FILE_USERS);
  // 2 convertir le json en tableau
  return json_decode($json,true);
}
function find_all_joueurs(){
  $json=file_get_contents(FILE_USERS);
  $arrayUser= json_decode($json,true);

  foreach ($arrayUser as $user) {
    if ($user['role'] == 'ROLE_JOUEUR') {
      $joueur_user[]= $user;

    }
  }
  return $joueur_user;
}

function find_all_admins(){
  $json=file_get_contents(FILE_USERS);
  $arrayUser= json_decode($json,true);
  foreach ($arrayUser as $user) {
    if ($user['role'] == 'ROLE_ADMIN') {
      $admin_user[]= $user;

    }
  }
  return $admin_user;
}

function find_login_password(string $login, string $password){
    $arrayUser=find_all_users();
    foreach($arrayUser as $user){
        if ($user['login']==$login && $user['password']==$password) {
          
          return $user;
        }
    }
    return [];
}
function generate_id():string{
  $tab  = '0123456789';
  return rand($tab,7);

}

function add_user(array $user){
  $json=file_get_contents(FILE_USERS);
  $arrayUser= json_decode($json,true);
  $user['id']=generate_id();
  $arrayUser[]=$user;
  //convertir le tableau en json
  ajout_user($arrayUser);
}
function ajout_question(array $arrayQuestion){
  $json = json_encode($arrayQuestion);
  file_put_contents(FILE_QUESTIONS , $json);
}
function add_question(array $question){
  $json=file_get_contents(FILE_QUESTIONS);
  $arrayQuestion= json_decode($json,true);
  $question['id']=generate_id();
  $arrayQuestion[]=$question;
  //convertir le tableau en json
  ajout_question($arrayQuestion);
}

function login_exist(string $login):array{
    $arrayUser=find_all_users();
    foreach($arrayUser as $user){
        if ($user['login']==$login) {
          return $user;
        }
    }
    return [];
}



function ajout_user(array $arrayUser){
    $json = json_encode($arrayUser);
    file_put_contents(FILE_USERS , $json);
}



function find_user_id(string $id):array{
  $json =file_get_contents(FILE_USERS);
  $arrayUser = json_decode($json , true);
  foreach($arrayUser as $user ){
    if ($user ['id'] == $id){
      return $user;
    }
  }
  return[];
}


function find_question_id( $id):array{
  $json =file_get_contents(FILE_QUESTIONS);
  $arrayUser = json_decode($json , true);
  foreach($arrayUser as $user ){
    if ($user ['id'] == $id){
      return $user;
    }
  }
  return[];
}



function modif_user(array $new_user){
$json = file_get_contents(FILE_USERS);
$arrayUser = json_decode($json , true);

foreach ($arrayUser as $key =>$old_user ) {
    if ($old_user['id'] == $new_user['id']){
      $arrayUser[$key] = $new_user;
    }
  }
  $json = json_encode($arrayUser);
  file_put_contents(FILE_USERS , $json);
}  




function find_all_questions(){
  $json =file_get_contents(FILE_QUESTIONS);
  // 2 convertir le json en tableau
  return json_decode($json,true);
}


function suppression_question(string $id):bool{
  $json =file_get_contents(FILE_QUESTIONS);
  // 2 convertir le json en tableau
  $arrayQuestion = json_decode($json,true); 
  $tab = [];
  $ok = false;
    foreach( $arrayQuestion as $question){
        if ($question['id'] == $id) {
          $ok = true;
        }else{
          $tab [] = $question;
        }
    }
    if($ok){
      $json = json_encode($tab);
      file_put_contents(FILE_QUESTIONS , $json);
    }
    return $ok;

}




function modif_question(array $new_question){
  $json = file_get_contents(FILE_QUESTIONS);
  $arrayQuestion = json_decode($json , true);
  foreach ($arrayQuestion as $key => $old_question  ) {
      if ($old_question['id'] == $new_question['id']){
        $arrayQuestion[$key] = $new_question;
      }
    }
     $json = json_encode($arrayQuestion);
      file_put_contents(FILE_QUESTIONS , $json);
  }
















?>