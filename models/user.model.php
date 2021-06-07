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


function add_user(array $user){
  $json=file_get_contents(FILE_USERS);
  $arrayUser= json_decode($json,true);
  $arrayUser[]=$user;
  //convertir le tableau en json
  $json = json_encode($arrayUser);
  file_put_contents(FILE_USERS , $json);
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
?>