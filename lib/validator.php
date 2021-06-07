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
function validation_champ(string $valeur, string  $key,  &$arrayError){
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
function valide_datenaiss( $datenaiss , $test):bool{ 
            $test = explode('/', $datenaiss); 
        if (verif_mois($test[1]) == true) {
            switch ($test[1]) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    return $test[0] > 0 && $test[0] <= 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    return $test[0] > 0 && $test[0] <= 30;
                    break;
                case 2:
                    if (is_annee_bissextile($test[2])) {
                        return $test[0] > 0 && $test[0] < 30;
                    } else {
                        return $test[0] > 0 && $test[0] < 29;
                    }
                default:
                    return false;
            }
        }else{
            return false;
        }
}
function validation_date_naissance($datenaiss,string $key,&$arrayError,$test):void{
    $test = explode('/', $datenaiss); 
    if (est_vide($datenaiss)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif(!valide_datenaiss($datenaiss,$test)) {
        $arrayError[$key] = "La date de naissance est invalide";
    }
}


?>