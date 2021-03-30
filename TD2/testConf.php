<?php 
require_once('Conf.php');
echo Conf::getLogin();
echo"<br>";
echo Conf::getHostname();
echo"<br>";
echo Conf::getDatabase();
echo"<br>";
echo Conf::getPassword();
echo"<br>";
?>