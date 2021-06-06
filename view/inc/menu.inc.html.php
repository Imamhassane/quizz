<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR.'view/inc/header.inc.html.php');
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="valider">Deconnexion</button>
        </form>
    </div>
</nav>
<?php
require(ROUTE_DIR.'view/inc/footer.inc.html.php');
?>