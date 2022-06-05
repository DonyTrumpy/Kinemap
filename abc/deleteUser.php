<?php
session_start();
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'u988824173_frozenpinguin');
define('DB_SERVER_PASSWORD', 'Narnia2011.');
define('DB_DATABASE', 'u988824173_Kinemap');

$dboptions = array(
        PDO::ATTR_PERSISTENT => FALSE,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

try {
  $DB = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD , $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}

			$sql = "Delete FROM professionals where id=" . $_GET["id"];
			$DB->query($sql);
?>
