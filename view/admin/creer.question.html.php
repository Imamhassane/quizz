<?php
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
            <!-- <form method="POST" action="">  -->
                    <div class="questionliste">
                        <div class="form-group row mt-4 ml-3">
                            <label for="" class="mt-4">Question</label>
                            <textarea name="" id="" cols="30" rows="2" class="ml-2"></textarea>
                        </div>
                        <div class="form-group mt-5 ml-4 ">
                            <div class="form-row align-items-center">
                                <label for="" class="">Nbre de questions</label>
                                <div class="col-auto my-1">
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected></option>
                                        <option value="1">5</option>
                                        <option value="2">10</option>
                                        <option value="3">15</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row mt-5 ml-3 ">
                            <label for="" class="mt-2">Type de réponse</label>
                            <select class="form-select ml-2" aria-label="Disabled select example" >
                                <option selected>type</option>
                                <option value="1">Text</option>
                                <option value="2">Chekhbox</option>
                                <option value="3">radio</option>
                            </select>
                                <div class="btn-plus"> 
                                    <a href="#" class="btn btn-info btn-lg ml-2 "><span class="glyphicon glyphicon-plus"></span>+</a>
                                </div>
                        </div>
                        <div class="form-group row mt-5 ml-3">
                            <label for="" class="mt-2">Type de réponse</label>
                            <textarea name="" id="" cols="30" rows="2" class="ml-2 typereponse"></textarea>
                        </div>
                            <a href="#"><button type="submit" class="btn mt- mr-2">Enregistrer</button></a>
                    </div>
            <!-- </form> -->
            </div>
    </div>