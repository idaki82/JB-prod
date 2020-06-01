<?php
// db connection params, error messages, ...
define('DBPARAMS',['mysql:host=localhost;port=3308;dbname=ygkefqg165','root','']); 

define('ERR_CONN_MESS', 
	"<< Cannot connect to db with parameters: " . DBPARAMS[0] . ", ". DBPARAMS[1] . ", " . DBPARAMS[2] . " >>"); 

define('ERR_LIST_THEME_MESS', 
	"<< Cannot get List of Theme >>"); 




?>