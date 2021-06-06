<?php 

// fonction de validation
function est_vide(string $valeur): bool {
    return empty($valeur);
}


function is_email($valeur):bool{
    if (filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
        return true;
      }else {
        return false;
      }
}
function form_valid($arrayError):bool{
    if (count($arrayError)==0){
        return true;
    }
    return false;
}

function validation_login(string $valeur, string  $key, array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le login est obligatoire";
    }elseif (!is_email($valeur)) {
        $arrayError[$key] = "le login doit être un email (exemple123@gmail.com)";
    }
        
}
function validation_password(string $valeur, string $key , array &$arrayError, $min = 6, $max = 10){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le password est obligatoire";
    }elseif ((strlen($valeur) < $min)||(strlen($valeur) > $max)) {
        $arrayError[$key] = "le password doit être compris entre $min et $max";
    }
}
function validation_champ(string $valeur, string  $key, array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }   
}
function verif_mois($mois): bool
{
    return $mois > 0 && $mois <= 12;
}
function is_annee_bissextile(int $annee): bool
{
    return $annee % 400 == 0 || ($annee % 4 == 0 && $annee % 100 != 0);
}

function verif_date(int $jour, int $mois, int $annee ): bool{
    if (verif_mois($mois)) {
        switch ($mois) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
            $indice_mois = 31;
            if ($_POST['jour'] < 1 || $_POST['jour'] <31) {
                $error['jour'] ='le jour doit etre compris entre 1 et 31';
            }
                break;
        case 4:
        case 6:
        case 9:
        case 11:
            $indice_mois = 30;
            if ($_POST['jour'] < 1 || $_POST['jour']>30) {
                $error['jour'] ='le jour doit etre compris entre 1 et 30';
            }
                break;
            case 2:
                if ($annee%400==0 && ($annee%4==0 && $annee%100!=0)) {
                    $indice_mois = 29;
                    if ($_POST['jour'] < 1 || $_POST['jour'] >29) {
                        $error['jour'] ='le jour doit etre compris entre 1 et 29';
                    }
                }else {
                    $indice_mois = 28;
                    if ($_POST['jour'] < 1 || $_POST['jour'] >28) {
                        $error['jour'] ='le jour doit etre compris entre 1 et 28';
                    }
                }
                break;
                
        } 
    }
}

function separateur( string $date,string  $key, array &$arrayError){
   $test = explode('/', $date); 
  // var_dump(strlen($test[0]));
  $cptjour = strlen($test[0]) ;
 $cptmois  =  strlen($test[1])  ;
 $cptannee  = strlen($test[2] );
 
 $jour =$test[0] ;
 $mois  =$test[1]  ;
 $annee  = $test[2];

    if($cptjour!=2){
        $arrayError[$key] = 'le jour doit etre 2 chiffres';
    }else{
        switch ($mois) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
            if ($jour < 1 || $jour <31) {
                $arrayError[$key] ='le jour doit etre compris entre 1 et 31';
            }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
            if ($jour < 1 || $jour > 30) {
                $arrayError[$key] ='le jour doit etre compris entre 1 et 30';
            }
                break;
            case 2:
                if ($annee%400==0 || ($annee%4==0 && $annee%100!=0)) {
                    if ($jour < 1 || $jour >29) {
                        $arrayError[$key] ='le jour doit etre compris entre 1 et 29';
                    }
                }else {
                    if ($jour < 1 || $jour > 28) {
                        $arrayError[$key] ='le jour doit etre compris entre 1 et 28';
                    }
                }
                break;
                
        }
    }

    if($cptmois !=2){
            $arrayError[$key] = 'le mois doit etre 2 chiffres';
        }else{
            if($mois < 1 || $mois > 12){
                $arrayError[$key] = 'le mois doit etre compris entre 1 et 12';
            }
        }





    if($cptannee != 4){
            $arrayError[$key] = 'l\'année doit etre 4 chiffres';
        }else{
            if ($annee < 1){
                $arrayError[$key] = 'l\'année doit etre supérieur à 1';
            }
        }








  if (est_vide($date)) {
    $arrayError[$key] = "Ce champ est obligatoire";
    } 
    
}
// function valid_date(string $valeur, string  $key, array &$arrayError){
//     if (empty($valeur)) {
//         $arrayError[$key] = "Champ obligatoire";
//         // }elseif (!is_numeric($valeur)){
//         // $arrayError[$key] = "Saisir une valeur entière";
//     }
//     separateur($valeur);
// }


// if(strlen($test[1])!=2){
//     $arrayError[$key] = 'le moi doit etre 2 chiffres';
// }
// if(strlen($test[2])!=4){
//     $arrayError[$key] = 'l\'année doit etre 4 chiffres';
// }
// if($test[0] > 31 ){
//     $arrayError[$key] = 'le jour ne doit pas dépassé 31 ';
// }
?>