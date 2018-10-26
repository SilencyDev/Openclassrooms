<?php

namespace API\App\Blog\Manager;

use API\Lib\Blog\Model\Db;

class CommentManager extends Db {

  public function countComment() {
    $sql = 'SELECT COUNT(*) FROM comment';

    $countComment = $this->executeRequest($sql)->fetchColumn();

    return $countComment;
  }

  public function addComment($content, $newsId, $request) {
    $sql = 'INSERT INTO comment(newsId, userId, content, creationDate) VALUES(?, ?, ?, ?)';
    $q = $this->executeRequest($sql,array($newsId, $request->getSession()->getAttribut("id"), $content, date("Y/m/d H:i:s")));
  }

  public function updateComment($content, $request) {
    $sql = 'UPDATE comment SET content = ? WHERE id = ?';

    $q = $this->executeRequest($sql,array($content, $request->getParams('commentId')));
  }
  
  public function getComment($commentId) {
    $sql = 'SELECT id, newsId, userId, content, creationDate FROM comment WHERE id = ?';
    $newsId = (int) $newsId;
    $comments = $this->executeRequest($sql, array($newsId));

    return $comments;
  }

  public function getValidatedComment($newsId) {
    $sql = 'SELECT id, newsId, userId, content, creationDate FROM comment WHERE newsId = ? and validated = 1';
    $newsId = (int) $newsId;
    $comments = $this->executeRequest($sql, array($newsId));

    return $comments;
  }

  public function getUnvalidatedComment() {
    $sql = 'SELECT id, newsId, userId, content, creationDate FROM comment WHERE validated = 0';
    $newsId = (int) $newsId;
    $comments = $this->executeRequest($sql, array($newsId));

    return $comments;
  }

  public function deleteComment($request) {
    $sql = 'DELETE FROM comment WHERE id = ?';
    $q = $this->executeRequest($sql,array($request->getParams("commentId")));
  }

  public function deleteCommentsFromNews($newsId) {
    $sql = ('DELETE FROM comment WHERE newsId = '.(int) $newsId);
    $q = $this->executeRequest($sql,array($newsId));
  }
}