<?php

/** O nome do banco de dados*/
define('DB_NAME', 'wda_crud');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

// caminho absoluto para a pasta do sistema 
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . './pet/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', 'http://localhost/pet');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . './database.php');