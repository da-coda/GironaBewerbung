<?php

declare(strict_types=1);
namespace Entity;

class RoleEntity {

    public readonly int $id;

    /**
     * @var Module[]
     */
    public readonly array $modulePermissions;

    public function hasPermissionForModule(Module $module): bool
    {
        return in_array($module, $this->modulePermissions, true);
    }
}