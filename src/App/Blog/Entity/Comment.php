<?php

namespace API\App\Blog\Entity;

use API\App\Blog\Manager\CommentManager;

class Comment extends CommentManager {

	private $id;
	private $userId;
	private $creationDate;
	private $updateDate;
	private $content;
	private $newsId;
	private $validated;

	public function getId() :int {	
		return $this->id;
	}
	
	public function setId(int $id) :self {	
		$this->id = $id;

		return $this;
	}

	public function getUserId() :string {	
		return $this->userId;
	}

	public function setUserId(string $userId) :self {
		$this->userId = $userId;

		return $this;
	}

	public function getCreationDate() {	
		return $this->creationDate;
	}
	
	public function setCreationDate($creationDate) :self {	
		$this->position = $creationDate;

		return $this;
	}

	public function getUpdateDate() {	
		return $this->updateDate;
	}
	
	public function setUpdateDate( $updateDate) :self {
		$this->position = $updateDate;

		return $this;
	}

	public function getContent() :string {
		return $this->content;
	}

	public function setContent(string $content) :self {	
		$this->content = $content;

		return $this;
	}

	public function getNewsId() :int {	
		return $this->newsId;
	}
	
	public function setNewsId(int $newsId) :self {	
		$this->newsId = $newsId;

		return $this;
	}

	public function getValidated() :boolean {
		return $this->validated;
	}

	public function setValidated(boolean $validated) :self {	
		$this->validated = $validated;

		return $this;
	}
}