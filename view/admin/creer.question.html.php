<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
    require_once(ROUTE_DIR.'view/inc/head.html.php');
    
?>

    <div class="row ">
            <div class="col-md-4 mt-5">
                <div class="mt-4 ">
                    <?php require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');?>
                </div>
            </div>
        
            <div class="pageAddQuestion col-md-8  ">
                <h3 class="parametre mt-3">PARAMETER VOS QUESTIONS</h3>
            <form method="POST" action="<?=WEB_ROUTE?>"> 
            <input type="hidden" name="controllers" value="admin">
            <input type="hidden" name="action" value="question">
            <input type="hidden" name="id"      value="<?=isset($question['id']) ? $question['id'] : ""; ?>">        
                    <div class="questionliste">
                        <div class="form-group row mt-4 ml-3">
                            <label for="" class="mt-4">Question</label>
                            <textarea name="question"  cols="30" rows="2" class="ml-2" ><?= isset($_SESSION['question']) ? $_SESSION['question'] : '' ?></textarea>
                        </div>
                        <small class = "form-text text-danger ml-3">
                                <?= isset($arrayError['question']) ? $arrayError['question'] : '' ;?>
                        </small>
                        
                          
                        <div class="form-group mt-5 ml-4 ">
                            <div class="form-row align-items-center">
                                <label for="" class="">Nombre de points</label>
                                <div class="col-auto my-1">
                                    <input type="text" name="nombre_de_points" id="input" class="form-control number-type" value="<?= isset($_SESSION['nombre_de_points']) ? $_SESSION['nombre_de_points'] : '' ?>" min="{5"} max="" >    
                                </div>
                            </div>
                        </div>
                        <small class = "form-text text-danger ml-3">
                                <?= isset($arrayError['nombre_de_points']) ? $arrayError['nombre_de_points'] : '' ;?>
                        </small>
                        <div class=" form-group row mt-5 ml-3 ">
                            <label for="" class="mt-2">Type de réponse</label>
                            <select class="form-select ml-2" aria-label="Disabled select example" name="type_de_reponse" >
                                <option selected>Donnez le type de réponse</option>
                                <option value="Text">Text</option>
                                <option value="Chekhbox">Chekhbox</option>
                                <option value="radio">radio</option>
                            </select>
                              
                        </div>
                        <div class=" form-group row mt-5 ml-3 ">
                            <label for="" class="mt-3">Nombre de réponse possible</label>
                            <div class="col-auto my-1">
                                <input type="text" name="reponse_possible" id="input" class="form-control number-type" value="<?= isset($_SESSION['reponse_possible']) ? $_SESSION['reponse_possible'] : '' ?>" min="{5"} max="" step=""  title="">    
                            </div>
                            <div class="btn-plus"> 
                                <button type="submit" name="plus"  class="btn mt-2">+</button>
                            </div>
                        </div>
                         <small class = "form-text text-danger ml-3 mb-3 ">
                                <?= isset($arrayError['reponse_possible']) ? $arrayError['reponse_possible'] : '' ;?>
                        </small>
                        <?php if (isset($arrayError['test'])):?>
                                <small class = "form-text text-danger ml-3 mb-3 ">
                                        <?= $arrayError['test']; ?>
                                </small>
                        <?php endif ?>
                       


                        <?php $plusInput = $_SESSION['plus']?>
                        <?php for ($i=1 ; $i<= $plusInput; $i++) :?>
                        
                        <div class="form-group row mt-5 ml-3">
                            <label for="" class="mt-2">Réponse<?=$i?></label>
                            <textarea name="reponse<?=$i?>" cols="30" rows="2" class="ml-2 typereponse"></textarea>
                            <div class="form-check ml-2 ">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio" id="" value="" >
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="checkbox" id="" value="" >
                              </label>
                            </div>
                        
                        </div>
                        <small class = "form-text text-danger ml-3 mb-2">
                            <?php isset($arrayError['reponse']) ? $arrayError['reponse'] : '' ;?>
                        </small> 



                        <?php endfor;
                        if(isset($_SESSION['plus'])|| isset($_SESSION['reponse_possible']) || isset($_SESSION['question']) || isset($_SESSION['nombre_de_points']) ){
                            unset($_SESSION['plus']);
                            unset ($_SESSION['reponse_possible']);
                            unset($_SESSION['question']);
                            unset ($_SESSION['nombre_de_points']);
                        }
                        ?>
                            <a href=""><button type="submit" name="save" class="btn mt- mr-2">Enregistrer</button></a>
                    </div>
             </form> 
            </div>
    </div>
    <style>
     .number-type{
                            
                            background-color: #dadcdb;
                            border-bottom: 2px solid #c90017;
                            border-left: none;
                            border-top: none;
                        }
    </style>