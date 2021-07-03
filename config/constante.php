<?php 
// define("WEB_ROUTE" , "http://niassimamhassane.alwaysdata.net/");
define("WEB_ROUTE" , "http://localhost:8001/");
define('ROUTE_DIR', str_replace ('public', '' , $_SERVER['DOCUMENT_ROOT']));
define("FILE_USERS" , ROUTE_DIR.'data/user.data.json' );
define("FILE_QUESTIONS" , ROUTE_DIR.'data/question.data.json' );
define("NOMBRE_PAR_PAGE" , 5 );

?>