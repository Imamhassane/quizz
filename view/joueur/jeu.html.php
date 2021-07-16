<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');
?>


<div class="row">
        <div class="pageQuestionList col-md-7 p-0">
            <h3 class="parametre mt-2"><i>Jouez pour le plaisir</i> </h3>
            <div class="questionlist">             
                <div class="">
                    <?php for ($i = 0 ; $i <= count($data)-1; $i++ ):?>
                        <?php $question = $data[$i]?>

                        <div>
                            <span class="ml-2 mt-2" ><?=($i+1).':'.' '.$question['question']?></span> 
                            <p class="float-right"><?= $question['nombre_de_points'].' '.'pts'?></p>
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
          </div>
            
                <?php
                    $json=file_get_contents(FILE_QUESTIONS);
                    $arrayQuestion= json_decode($json,true);
                ?>
                <div class="suivant mt-2">
                        <?php if(($_GET['view'] == 'liste.question') && count($arrayQuestion) <= 5 ): ?>
                            <a name="" id="" class="btn btn-red disabled  mt-2" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu'; ?>" role="button">Suivant</a>
                        <?php endif ?>
                        <?php if($_GET['page'] <= $nbrPage-1 && count($arrayQuestion) > 5 || $_GET['view'] == 'confirme'  ): ?>
                            <a name="" id="" class="btn  btn-red mt-2" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu&page='.$suivant; ?>" role="button">Suivant</a>
                        <?php endif ?>
                    <div class="float-left ml-3">
                        <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                            <a name="" id="" class="btn btn-red disabled  mt-2" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php else: ?>
                            <a name="" id="" class="btn btn-red  mt-2" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu&page='.$precednt;  ?>" role="button">Precedent</a> 
                        <?php endif ?>
                    </div>
                </div>
        </div>
        
            <div class="col-md-5 unset-it" >      
              <?php require(ROUTE_DIR.'view/joueur/top.score.html.php');?>
          </div>

</div>
</div>

    




<style>

      .table td, .table th {
          padding: .75rem;
          vertical-align: top;
          border-top: none;
      }
.table thead th {
    vertical-align: bottom;
    border-bottom: none;
}

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
                   .table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: none;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: none;
}
.menu{
  border-radius: 0;
}
.pageQuestionList{
    border-radius: 0;

}
.pageListJoueur {
    border-radius: 0;
   
}
 
</style>