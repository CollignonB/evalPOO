<?php


class User {

    const SEX = ["male", "female"];

    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected string $sex;
    protected string $birthdate;
    protected string $address;
    protected string $postal_code;
    protected string $city;

    public function getId():int {
        return $this->id;
    }
    public function getFirstname():string{
        return $this->firstname;
    }
    public function getLastname():string{
        return $this->lastname;
    }
    public function getSex():string{
        return $this->sex;
    }
    public function getBirthdate():string{
        return $this->birthdate;
    }
    public function getAddress():string{
        return $this->address;
    }
    public function getPostal_code():string{
        return $this->postal_code;
    }
    public function getCity():string{
        return $this->ciy;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function setFirdtname(string $firstname){
        $this->firstname = $firstname;
    }
    public function setSex(string $sex){
        if (in_array($sex, self::SEX)){
            $this->sex = $sex;
        }
    }
    public function setBirthdate(string $date){
        $this->birthdate= $date;
    }
    public function setAddress(string $address){
        $this->address = $address;
    }
    public function setPostal_code(string $pCode){
        $this->postal_code = $pCode;
    }
    public function setCity(string $city){
        $this->city = $city;
    }
    private function hydrate(array $datas){
        foreach($datas as $key => $value){
            $method = "set" ; ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method(htmlspecialchars($value));
            }
        }
    }

    public function __construct(array $data){
        $this->hydrate($data);
    }
}