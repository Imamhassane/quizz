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

            <div class="row p-0">
                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre d'admin</h3>
                            <p>14</p>
                            <i class="fas fa-user-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre de joueur</h3>
                            <p>254</p>
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
                
                <div class="column ">
                    <div class="card">
                        <div class="d-flex justify-content-between mt-2">
                            <h3>Nombre de visiteur</h3>
                            <p>437</p>
                            <i class="fas fa-eye"></i>
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