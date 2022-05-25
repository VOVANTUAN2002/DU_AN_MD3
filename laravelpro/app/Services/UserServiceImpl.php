<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserServiceImpl extends Service implements UserService
{

    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;

    }

    // MoreImplementation

}