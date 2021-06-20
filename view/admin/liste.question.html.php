<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');
?>


    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="mt-4 ">
                <?php require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');?>
            </div>
        </div>
        <div class="pageQuestionList col-md-8 p-0">
        <h3 class="parametre mt-2">PARAMETER VOS QUESTIONS</h3>
            <div class="questionlist">
                 <!-- <form > -->
                <div style="display: inline-grid;">

             
                    <div class="form-check m-2"  style="display: inline-grid;">
                        <span>1: Les langages du web</span>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                            HTML
                        </label>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
                           R
                        </label>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
                            JAVA
                        </label>
                    </div>

                    <div class="form-check m-2"  style="display: inline-grid;">
                        <span>2: D'ou vient le corona</span>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="corona" id="" value="checkedValue" checked>
                            Italie
                        </label>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="corona" id="" value="checkedValue" >
                           Chine
                        </label>
                    </div>


                    <div class="form-check m-2"  style="display: inline-grid;">
                        <span>3: Langage qui s'adapte sur Android et Ios</span>
                        <label class="ml-4 mt-1">
                            <input type="texte" name="" id="" value="" >
                        </label>
                       
                    </div>


                    <div class="form-check m-2"  style="display: inline-grid;">
                        <span>4:  Première école de codage au Sénégal</span>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="codage" id="" value="checkedValue" checked>
                            Simplon
                        </label>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="codage" id="" value="checkedValue" >
                           Orange digital center
                        </label>
                    </div>
                    <div class="form-check m-2"  style="display: inline-grid;">
                        <span>5: Les précurseurs de la révolution digitale</span>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="digitale" id="" value="checkedValue" checked>
                            GAFAM
                        </label>
                        <label class="form-check-label ml-5 mt-2">
                            <input type="radio" class="form-check-input" name="digitale" id="" value="checkedValue" >
                           CIA-FBI
                        </label>
                    </div>
                </div>
                <!-- </form>  -->






            </div>
            <div class="suivant mt-2">
                <button type="submit" class="btn mt-4 mr-2">Suivant</button>
            </div>

        </div>
    </div>
