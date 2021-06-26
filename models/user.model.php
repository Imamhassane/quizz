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
function modif_user(array $new_user){
$json = file_get_contents(FILE_USERS);
$arrayUser = json_decode($json );

foreach ($arrayUser as $key => $old_user) {
    if ($user_old['id'] == $new_user['id']){
      $arrayUser[$key] = $new_user;
    }
  }
  ajout_user($arrayUser);
}  

// function suppression_user(string $id):bool{
//   $arrayUser=find_all_users();
//   $users = [];
//   $ok = false;
//     foreach($users as $user){
//         if ($user['id']!=$id) {
//           $ok = true;
//         }
//     }
//     return $ok;
// }

















?>