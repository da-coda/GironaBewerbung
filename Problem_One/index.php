<?php

declare(strict_types=1);

use Repository\RoleRepository;
use Repository\UserRepository;
use Service\UserService;

$userRepository = new UserRepository();
$roleRepository = new RoleRepository();
$service = new UserService($roleRepository, $userRepository);
$service->loadUsersForAufrufanlage();