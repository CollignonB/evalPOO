<?php
// Classe représetant les livres stockés en base de données
class Book {

    protected int $id;
    protected string $tittle;
    protected string $author;
    protected string $resume;
    protected string $publication_date;
    protected string $category;
    protected bool $status;

    protected USER $user;

    public function getId():int{
        return $this->id;
    }
    public function getTittle():string{
        return $this->tittle;
    }
    public function getAuthor():string{
        return $this->author;
    }
    public function getResume():string{
        return $this->resume;
    }
    public function getPublication_date():string{
        return $this->publication_date;
    }
    public function getCategory():string{
        return $this->category;
    }
    public function getStatus():string{
        return $this->status;
    }
    public function getUser():User{
        return $this->user;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function setTittle(string $tittle){
        $this->tittle = $tittle;
    }
    public function setAuthor(string $author){
        $this->author = $author;
    }
    public function setResume(string $resume){
        $this->resume = $resume;
    }
    public function setPublication_date(string $publication){
        $this->publication_date = $publication;
    }
    public function setCategory(string $category){
        $this->category = $category;
    }
    public function setStatus(bool $status){
        $this->status = $status;
    }
    public function setUser(User $user){
        $this->user = $user;
    }

    private function hydrate(array $datas){
        foreach($datas as $key => $value){
            $method = "set" ; ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function __construct(array $data){
        $this->hydrate($data);
    }
}
