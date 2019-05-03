<?php
 /* File: dbconfig.php
 * Define the four constants with all
 * the db information.
 */
 define('DB_NAME', 'Rental');
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PWD', 'root');
 define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/Ecom/');

/* Define the PDO connection string.
 */
 define('MYSQL_CONNECTION_STRING',
 'mysql:host=' . DB_HOST .
 ';dbname=' . DB_NAME);

define('MYSQL_CONNECTION_STRING1',
 'mysql:host=' . DB_HOST);

?> 