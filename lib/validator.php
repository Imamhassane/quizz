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

function separateur( string $date,string  $key, array &$arrayError){
   $test = explode('/', $date); 
  // var_dump(strlen($test[0]));
    $cptjour = strlen($test[0]) ;
    $cptmois  =  strlen($test[1])  ;
    $cptannee  = strlen($test[2] );
 
    $jour = $test[0];
    $mois = $test[1];
    $annee = $test[2];


    
    if($cptjour !=2 ){
        $arrayError[$key] = 'Le jour doit être 2 chiffres';
    }elseif($cptjour =2 ){
        if($cptmois !=2 ){
            $arrayError[$key] = 'Le mois doit etre 2 chiffres';
        }else if($cptmois =2){
            if($mois < 1 || $mois > 12){
                $arrayError[$key] = 'Le mois doit etre compris entre 1 et 12';
            }
        }
        switch ($mois) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
            if ($jour > 1 || $jour > 31) {
                $arrayError[$key] ='Le jour doit etre compris entre 1 et 31';
            }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
            if ($jour < 1 || $jour > 30) {
                $arrayError[$key] ='Le jour doit etre compris entre 1 et 30';
            }
                break;
            case 2:
                if ($annee%400==0 || ($annee%4==0 && $annee%100!=0)) {
                    if ($jour < 1 || $jour > 29) {
                        $arrayError[$key] ='Le jour doit etre compris entre 1 et 29';
                    }
                }else {
                    if ($jour < 1 || $jour > 28) {
                        $arrayError[$key] ='Le jour doit etre compris entre 1 et 28';
                    }
                }
                break;
                
        }
    }

    if($cptmois !=2){
            $arrayError[$key] = 'Le mois doit etre 2 chiffres';
        }else{
            if($mois < 1 || $mois > 12){
                $arrayError[$key] = 'Le mois doit etre compris entre 1 et 12';
            }
        }
    if($cptannee != 4){
            $arrayError[$key] = 'L\'année doit etre 4 chiffres';
        }else{
            if ($annee < 1){
                $arrayError[$key] = 'l\'année doit etre supérieur à 1';
            }
        }
    if (!is_numeric($jour)){
            $arrayError[$key] = 'La date doit être numérique';
    
        }
  
    if (est_vide($date)) {
        $arrayError[$key] = "Ce champ est obligatoire";
        } 
        
}

?>