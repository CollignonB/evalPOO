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
  public function addBook(Book $book) {
      $querry = $this->db->prepare("
        INSERT INTO book (tittle, author, category, resume, publication_date)
        VALUES (:tittle, :author, :category, :resume, :publication_date)
      ");

      $querry->execute([
        "tittle" => htmlspecialchars($book->getTittle()),
        "author" => htmlspecialchars($book->getAuthor()),
        "category" => htmlspecialchars($book->getCategory()),
        "resume" => htmlspecialchars($book->getResume()),
        "publication_date" => htmlspecialchars($book->getPublication_date())
      ]);
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book) {
    $querry = $this->db->prepare("
      UPDATE book 
      SET user_id = NULL
      WHERE id = :id
    ");
    $querry->execute([
      "id" => $book->getId()
    ]);
  }

  public function bookAssign(User $user, Book $book){
    $querry = $this->db->prepare("
      UPDATE book 
      SET user_id = :userId
      WHERE id = :bookId
    ");
    $querry->execute([
      "userId" => $user->getId(),
      "bookId" => $book->getId()
    ]);
  }
  public function deleteBook(Book $book){
    $querry = $this->db->prepare(("
      DELETE FROM book
      Where id = :id
    "));

    $querry->execute([
      "id" => $book->getId()
    ]);

  }
}
