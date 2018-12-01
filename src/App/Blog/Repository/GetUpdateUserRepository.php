<?php

namespace API\App\Blog\Repository;

use API\Lib\Blog\Model\Db;

class GetUpdateUserRepository extends Db {
    public function getUpdateUser($imageId, $firstName, $lastName, $pseudo, $password, $email, $dateOfBirth, $request) {
        $q = 'UPDATE user SET imageId = ?, firstName = ?, lastName = ?, pseudo = ?, password = ?, email = ?, dateOfBirth = ?, administrator = ? WHERE id =?';

        $q = $this->executeRequest($sql,array($imageId, $firstName, $lastName, $pseudo, $password, $email, $dateOfBirth, date("Y/m/d H:i:s"), $request->getSession()->getAttribut('id')));
    }
}