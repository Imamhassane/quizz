<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');
?>
              <div class="row p-2 mt-3">
                    <div class="pageListJoueur col-md-12 p-0">
                        <h3 class="parametre ">5 meilleurs scores</h3>
                        <?php 
                          $json=file_get_contents(FILE_USERS);
                          $arrayUser= json_decode($json,true); 
                      ?>
                            <table class="table table-bordered m-2" style="width: 97%;">
                                <thead>
                                    <tr style="border-bottom:1px solid #ddd">
                                        <th scope="col">Prenom et Nom</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$user['prenom'].' '.$user['nom']?></td>
                                        <td><?=$user['score']?></td>
                                    </tr>
                                
                                </tbody>
                            </table>   
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