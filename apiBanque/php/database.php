<?php
// Auteur : Alexandre Babich
// Date   : 08.06.2020
// Version: Rendue
require_once("config.php");
require_once("allPage.php");
require_once("function.php");

 function db(){
 static $db = null;
   if ($db === null)
   {
       $dbString = "mysql:host=" . DB_HOST. ";dbname=" . DB_NAME . ";charset=utf8;port=3306";
       $db = new PDO($dbString, DB_USER, DB_PASS);
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   }
   return $db;
   }   

   function dbRun($sql, $param = null)
   {
       $statement = db()->prepare($sql);
       $result = $statement->execute($param);
       return $statement;
   }

   