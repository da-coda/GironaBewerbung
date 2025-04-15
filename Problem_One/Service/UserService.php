<?php

declare(strict_types=1);

namespace Service;

use Entity\Module;
use Entity\UserEntity;
use Repository\RoleRepository;
use Repository\UserRepository;

readonly class UserService {

    public function __construct(
        private RoleRepository $roleRepository,
        private UserRepository $userRepository,
    ) {}

    /**
     * @return UserEntity[]
     */
    public function loadUsersForAufrufanlage(): array
    {
        $allUsers = $this->userRepository->loadAllUsers();
        return array_filter($allUsers, function (UserEntity $user) {
            $userRole = $this->roleRepository->loadRole($user->roleId);
            return $userRole->hasPermissionForModule(Module::AUFRUFANLAGE);
        });
    }

}