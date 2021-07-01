<?php
    require_once(ROUTE_DIR.'view/inc/head.html.php');
?>
  <div class="row">
        <div class="col-md-4 mt-5">
            <div class="mt-4 ">
                <?php require_once(ROUTE_DIR.'view/inc/menu.inc.html.php');?>
            </div>
        </div>
        <div class="pageListJoueur col-md-8 ">
                            
               <h2 class="text-center mt-5">TABLEAU DE BORD</h2>
        <?php 
            $json=file_get_contents(FILE_USERS);
            $arrayUser= json_decode($json,true); 

            $json=file_get_contents(FILE_QUESTIONS);
            $arrayQuestion= json_decode($json,true); 

            $cptadmin =  $cptjoueur = $cptquestion = 0;

            foreach ($arrayUser as $user){
               
                if($user['role']== 'ROLE_ADMIN'){
                    $cptadmin++;
                }elseif($user['role']== 'ROLE_JOUEUR'){
                    $cptjoueur++;
                }
            }
            foreach ($arrayQuestion as $question){
               
                if($question['question']){
                    $cptquestion++;
                }
            }
           ?>
              
            <div class="row p-0">
                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre d'admin</h3>
                            <p class = "mr-2"><?=$cptadmin?></p>
                            <i class="fas fa-user-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre de joueur</h3>
                            <p class = "mr-4"><?=$cptjoueur?></p>
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
                
                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre de question</h3>
                            <p class = "mr-5"><?=$cptquestion?></p>
                            <i class="fa fa-question" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>  
         
        </div>
    </div>
  <style>
  * {
  box-sizing: border-box;
}

.pageListJoueur h2{
    border: 1px solid #c90017;
    background-color: #c90017;
    color:#fff;
    height: 50px;
    border-radius:5px;
}

.column {
  float: left;
  width: 100%;
  padding:20px;
  height: 80px;
  margin-left: 0%;
  margin-top: 20px
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 767px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card h3{
    text-align: left;
    font-size:17px;

}
.card p{
    margin-left:0%;
    
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 13px;
  background-color: #f1f1f1;
  height: 80px;
}
  </style>