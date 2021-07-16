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
               
               
                <div class="">
                    <?php for ($i = 0 ; $i <= count($data)-1; $i++ ):?>
                        <?php $question = $data[$i]?>

                        <div>
                            <span class="ml-2 mt-2" ><?=($i+1).':'.' '.$question['question']?></span>
                             
                            <a name="" id="" class="btn btn1 mr-0" href="<?=WEB_ROUTE.'?controllers=admin&view=edit&id='.$question['id']?>" role="button"> <i class="fas fa-edit "></i></a>
                            <a name="" id="" class="btn btn1 mr-0"  href="<?=WEB_ROUTE.'?controllers=admin&view=supprimer&id='.$question['id']?>" role="button"> <i class="far fa-trash-alt"></i></a>
                        </div>
                            <label class="p-3 ml-5">
                                        
                                <?php if($question['reponse']){ ?>
                                    <?php foreach ($question['reponse'] as $res ):?>
                                        <?php if($question['type_de_reponse'] == 'text'):?>
                                            <?=$res?></br>
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
            
                                            <?php
                                                $json=file_get_contents(FILE_QUESTIONS);
                                                $arrayQuestion= json_decode($json,true);
                                             ?>
                <div class="suivant mt-2">
                        <?php if(($_GET['view'] == 'liste.question') && count($arrayQuestion) <= 5 ): ?>
                            <a name="" id="" class="btn btn-red disabled  mt-2" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question'; ?>" role="button">Suivant</a>
                        <?php endif ?>
                        <?php if($_GET['page'] <= $nbrPage-1 && count($arrayQuestion) > 5 || $_GET['view'] == 'confirme'  ): ?>
                            <a name="" id="" class="btn  btn-red mt-2" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question&page='.$suivant; ?>" role="button">Suivant</a>
                        <?php endif ?>
                    <div class="float-left ml-3">
                        <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                            <a name="" id="" class="btn btn-red disabled  mt-2" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php else: ?>
                            <a name="" id="" class="btn btn-red  mt-2" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php endif ?>
                    </div>
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


.btn-red{
    background-color: #c90017;
    color:#fff;
}
.suivant , a:hover{
    color : #fff
}

.texte{
                       
                       background-color: #dadcdb;
                       border-bottom: 2px solid #c90017;
                       border-left: none;
                       border-top: none;
                       
                   }
</style>