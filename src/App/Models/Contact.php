<?php

namespace App\Models;

class Contact extends AbstractTable 
{
    protected ?string $user_id = null;
    protected ?string $firstname = null;
    protected ?string $lastname = null;
    protected ?string $address1 = null;
    protected ?string $address2 = null;
    protected ?string $city = null;
    protected ?string $state = null;
    protected ?string $zip = null;
    protected ?string $message = null;
    private ?string $created_at = null;  

    public function setUserId($user_id){
        $this->user_id=$user_id;
    }
    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }

    public function setLastname($lastname){
        $this->lastname=$lastname;
    }

    public function setAddress1($address1){
        $this->address1=$address1;
    }

    public function setAddress2($address2){
        $this->address2=$address2;
    }

    public function setCity($city){
        $this->city=$city;
    }

    public function setState($state){
        $this->state=$state;
    }

    public function setZip($zip){
        $this->zip=$zip;
    }

    public function setMessage($message){
        $this->message=$message;
    }

    public function setCreated_At($created_at){
        $this->created_at=$created_at;
    }


    public function toArray(){
        $contactArray = [
            $this->user_id,
            $this->firstname,
            $this->lastname,
            $this->address1,
            $this->address2,
            $this->city,
            $this->state,
            $this->zip,
            $this->message,
            $this->created_at
        ];
        return $contactArray;
    }
}