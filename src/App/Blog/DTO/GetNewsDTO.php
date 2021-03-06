<?php

namespace API\App\Blog\DTO;

class GetNewsDTO implements DTOInterface
{
    private $id;
    private $userId;
    private $content;
    private $title;
    private $creationDate;
    private $updateDate;
    private $category;

    public function getId() :int
    {
        return $this->id;
    }

    public function setId(int $id) :self
    {
        $this->id = $id;

        return $this;
    }

    public function getUserId() :int
    {
        return $this->userId;
    }
    
    public function setUserId(int $userId) :self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getContent() :string
    {
        return $this->content;
    }
    
    public function setContent(string $content) :self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle() :string
    {
        return $this->title;
    }
    
    public function setTitle(string $title) :self
    {
        $this->title = $title;

        return $this;
    }

    public function getCreationDate() :\DateTime
    {
        return $this->creationDate;
    }
    
    public function setCreationDate(string $creationDate) :self
    {
        $this->creationDate = new \DateTime($creationDate);
        
        return $this;
    }

    public function getUpdateDate() :?\DateTime
    {
        if ($this->updateDate === null) {
            return null;
        }
        return $this->updateDate;
    }
    
    public function setUpdateDate(string $updateDate = null) :self
    {
        if ($updateDate !== null) {
            $this->updateDate = new \DateTime($updateDate);
        }
        return $this;
    }

    public function getCategory() :string
    {
        return $this->category;
    }

    public function setCategory(string $category = null) :self
    {
        $this->category = $category;

        return $this;
    }
}