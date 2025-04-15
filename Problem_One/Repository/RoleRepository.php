<?php

declare(strict_types=1);

namespace Repository;

use Entity\RoleEntity;
use RuntimeException;

class RoleRepository {
    /**
     * Lädt eine Role anhand ihrer ID aus der Datenbank
     * @throws RuntimeException Wenn keine Role zur ID gefunden werden kann
     */
    public function loadRole(int $roleID): RoleEntity
    {
        return new RoleEntity();
    }

    /**
     * @param int[] $roleIds
     * @return RoleEntity[]
     */
    public function loadManyRoles(array $roleIds): array
    {
        return [new RoleEntity()];
    }
}