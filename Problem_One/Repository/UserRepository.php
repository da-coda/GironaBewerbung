<?php

declare(strict_types=1);

namespace Repository;

use Entity\UserEntity;

class UserRepository {

    /**
     * Lädt alle User aus der Datenbank
     * @return UserEntity[]
     */
    public function loadAllUsers(): array
    {
        return [];
    }
}