<?php

namespace Classes;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Posts {

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\Column(type="string")
     */
    protected $title;

    /** 
     * @ORM\Column(type="string")
     */
    protected $content;

     /** 
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /** 
     * @ORM\Column(type="boolean")
     */
    protected $inMenu;
    

    public function getId(){
      return $this->id;
    }

    public function getTitle(){
      return $this->title;
    }

    public function getContent(){
      return $this->content;
    }

    public function getcreatedAt(){
      return $this->createdAt;
    }

    public function getinMenu(){
      return $this->inMenu;
    }

    public function setTitle($title){
      $this->title = $title;
    }

    public function setContent($content){
      $this->content = $content;
    }

    public function setcreatedAt(){
      $this->createdAt = new \DateTime("now");
    }

    public function setinMenu($inMenu){
      $this->inMenu = $inMenu;
    }
    
}


?>