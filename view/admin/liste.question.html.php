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
               
                <?php 
                    $json=file_get_contents(FILE_QUESTIONS);
                    $arrayQuestion= json_decode($json,true);        
                ?> 
                <div class="">
                    <?php for ($i = 0 ; $i <= count($arrayQuestion)-1; $i++ ):?>
                        <?php $question = $arrayQuestion[$i]?>

                        <div>
                            <span class="ml-2 mt-2" ><?=($i+1).':'.' '.$question['question']?></span> 
                            <a name="" id="" class="btn btn1 mr-4" href="<?=WEB_ROUTE.'?controllers=admin&view=edit&id='.$question['id']?>" role="button"> <i class="fas fa-edit "></i></a>
                            <a name="" id="" class="btn btn1 mr-4"  href="<?=WEB_ROUTE.'?controllers=admin&view=supprimer&id='.$question['id']?>" role="button"> <i class="far fa-trash-alt"></i></a>
                        </div>
                            <label class="p-3 ml-5">
                                <?php if($question['reponse']){ ?>
                                    <?php foreach ($question['reponse'] as $res ):?>
                                        <?php if($question['type_de_reponse'] == 'text'):?>
                                            <input type="text" class="form-check-input" name="" id="" value="" >
                                        <?php endif ?>
                                        <?php if($question['type_de_reponse'] == 'simple'):?>
                                            <input type="radio" class="form-check-input" name="radio" id="" value="" >
                                        <?php endif ?>
                                        <?php if($question['type_de_reponse'] == 'choix_multiple'):?>
                                            <input type="checkbox" class="form-check-input" name="" id="" value="" >
                                        <?php endif ?>
                                        <?=$res.'</br>'?>
                                    <?php endforeach ?>
                                <?php }?>
                            </label>
                                       
                    <?php endfor ?>
                 

                </div> 
                <!-- </form>  -->


                


            </div>
            <div class="suivant mt-2">
                <button type="submit" class="btn mt-4 mr-2">Suivant</button>
            </div>

        </div>
    </div>
<style>
.btn ,.btn1{
    margin-top:-8px;
   
}
.far ,.fas {
     color:#c90017;
}

.questionlist a{
    color:#000;
    opacity:0.7;    
}
a:hover{
    color : #c90017
}
</style>