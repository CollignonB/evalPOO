<?php

class userManager extends Model{

  public function getUsers() {
    $querry = $this->db->prepare("
      SELECT * FROM User
    ");
    $querry->execute();
    $querry->setFetchMode(PDO::FETCH_CLASS, 'user');
    return $querry->fetchAll();
  }

  // Récupère un utilisateur par son id
  public function getUserById($id) {
    $querry = $this->db->prepare("
    SELECT * FROM User
    WHERE id = :id
  ");
  $querry->execute([
    "id" => $id
  ]);
  $querry->setFetchMode(PDO::FETCH_CLASS, 'user');
  return $querry->fetch();
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
