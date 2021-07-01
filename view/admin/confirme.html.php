<?php
    require_once(ROUTE_DIR.'view/inc/header.inc.html.php');
    require(ROUTE_DIR.'view/inc/footer.inc.html.php');

?>
<div class="container-fluid">
    <img class="img-fluid " src="<?php echo  WEB_ROUTE.'img/logo.png';?>" alt="" srcset="">

    <h1>Le plaisir de jouer</h1>
</div>
 
        <div class="pageconfirm col-md-8 ml-auto mr-auto  ">
                            
               <h2 class="text-center mt-5">PAGE DE CONFIRMATION</h2>
                 <div class="row ">
                <div class="column ">
                    <div class="card">
                    <h3>Appuyez sur OUI pour contineur la suppression ou NON pour annuler</h3>

                        <div class="d-flex justify-content-between mt-2">
                            <div class="d-flex">
                              <a name="" id="" class="btn btn2" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question'?>" role="button">NON</a>
                              <a name="" id="" class="btn btn1 " href="<?=WEB_ROUTE.'?controllers=admin&view=confirme&id='.$question['id']?>" role="button">OUI</a>
                            
                            </div>
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

.pageconfirm h2{
    border: 1px solid #c90017;
    background-color: #c90017;
    color:#fff;

}
a{
  margin-top: 20px;

}
.col-md-8{
  padding: 0;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0;
    margin-left: 0;
}
.column {
  float: left;
  width: 100%;
  padding:20px;

  margin-left: 0%;
  margin-top: 10px
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.btn1{
  background-color: #c90017;
  color:#fff;
}
.btn2{
  background-color: green;
  color:#fff;
}
a:hover{
  color:#fff
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
  background-color: #fff;

}
  </style>