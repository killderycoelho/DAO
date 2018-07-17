<?php
/**
 * Created by PhpStorm.
 * User: killdery
 * Date: 17/07/2018
 * Time: 00:24
 */

class Sql extends PDO{
  private $conn;

  public function __construct(){
    $this->conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");
  }

  private function setParams($statment, $parameters = array()){
    foreach($parameters as $key => $value){
      $this->setParam($key, $value);
    }
  }

  private function setParam($statment, $key, $value){
    $statment->bindParam($key, $value);
  }

  public function query($rawQuery, $params = array()){
    $stmt = $this->conn->prepare($rawQuery);
    $this->setParams($stmt, $params);
    $stmt->execute();
    return $stmt;
  }

  public function select($rawQuery, $params = array()) {
    $stmt = $this->query($rawQuery, $params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }
}