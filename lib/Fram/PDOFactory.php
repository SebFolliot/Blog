<?php
namespace Fram;
 
class PDOFactory
{
  public static function getMysqlConnexion()
  {
    $db = new \PDO('mysql:host=db736629356.db.1and1.com;dbname=db736629356;charset=utf8', 'dbo736629356', 'BlogJF2018!');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
 
    return $db;
  }
}