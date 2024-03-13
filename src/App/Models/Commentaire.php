<?php
namespace App\Models;

class Commentaire extends AbstractTable 
{
    protected ?int $user_id = null;
    protected ?int $post_id = null;
    protected ?string $commentaire = null;
    protected ?string $created_at = null;
    public function setUserId($user_id){
        $this->user_id=$user_id;
    }
    public function setPost_Id($post_id){
        $this->post_id=$post_id;
    }

    public function setCommentaire($commentaire){
        $this->commentaire=$commentaire;
    }

    public function setCreated_At($created_at){
        $this->created_at=$created_at;
    }

    public function toArray(){
        $commentaireArray = [
            $this->user_id,
            $this->post_id,
            $this->commentaire,      
            $this->created_at
        ];
        return $commentaireArray;
    }
}