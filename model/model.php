<?php

require "model/connection.php";

abstract class Model  {
  protected PDO $db;

  public function __construct() {
      $this->db = Connection::getPDOConnection();
  }
}