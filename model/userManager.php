<?php

require_once "model/model.php";

class userManager extends Model{

  //Récupère tous les utilsiateurs
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
  $querry->setFetchMode(PDO::FETCH_CLASS, 'User');
  return $querry->fetch();
  }
  //Récupère les livres qu'un utilisateur a emprunté
  public function getUserBook(User $user){
    $querry = $this->db->prepare("
      SELECT b.tittle, b.id, b.author
      FROM `book` as b INNER JOIN user AS u ON u.id = b.user_id 
      WHERE user_id = :uid
    ");

    $querry->execute([
      "uid" => $user->getId()
    ]);
    $querry->setFetchMode(PDO::FETCH_CLASS, 'Book');
    return $querry->fetchAll();
  }

  public function addUser(User $user){
    try{
      $this->db->beginTransaction();
      $querry = $this->db->prepare("
        INSERT INTO User (firstname, lastname, sex, birthdate, postal_code, city)
        VALUES (:firstname, :lastname, :sex, :birthdate, :postal_code, :city)
      ");
      $result = $querry->execute([
        "firstname" => $user->getFirstname(),
        "lastname" => $user->getLastname(),
        "sex" => $user->getSex(),
        "birthdate" => $user->getBirthdate(),
        "postal_code" => $user->getPostal_code(),
        "city" => $user->getCity()
      ]);
      $this->db->commit();
        return $result;
    }catch(\Exception	$e){
      $this->db->rollBack();
    }
  }
}
