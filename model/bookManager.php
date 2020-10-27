<?php
include "model.php";

class bookManager extends Model {

  // Récupère tous les livres
  public function getBooks() {
    $querry = $this->db->prepare("
      SELECT * FROM book
    ");
    $querry->execute();
    $querry->setFetchMode(PDO::FETCH_CLASS, 'Book');
    return $querry->fetchAll();
  }

  // Récupère un livre
  public function getBook(int $id) {
    $querry = $this->db->prepare("
    SELECT * FROM book WHERE id = :id
    ");
    $querry->execute([
      "id" => $id
    ]);
    $querry->setFetchMode(PDO::FETCH_CLASS, 'Book');
    return $querry->fetch();

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book) {
    $book->getStatus() === 0 ? $s = 1 : $s = 0;

    $querry = $this->db->prepare("
      UPDATE book 
      SET status = :status
      WHERE id = :id
    ");
    $querry->execute([
      "status" => $s,
      "id" => $book->getId()
    ]);
  }

}
