<?php
// Classe représetant les livres stockés en base de données
class Book {

    protected int $id;
    protected string $tittle;
    protected string $author;
    protected ?string $resume;
    protected ?string $publication_date;
    protected string $category;
    protected ?int $user_id;

    public function getId():int{
        return $this->id;
    }
    public function getTittle():string{
        return $this->tittle;
    }
    public function getAuthor():string{
        return $this->author;
    }
    public function getResume():?string{
        return $this->resume;
    }
    public function getPublication_date():?string{
        return $this->publication_date;
    }
    public function getCategory():string{
        return $this->category;
    }
    public function getStatus():int{
        return $this->status;
    }
    public function getUserId(){
        return $this->user_id;
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
    public function setStatus(int $status){
        $this->status = $status;
    }
    public function setUserId($user){
        $this->user_id = $user;
    }

    private function hydrate(array $datas = null){
        foreach($datas as $key => $value){
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method(htmlspecialchars($value));
            }
        }
    }

    public function __construct(array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}