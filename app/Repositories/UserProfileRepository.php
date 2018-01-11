<?php

namespace App\Repositories;

use Laracoin\Usersprofiles;

class UserProfileRepository extends BaseRepositories
{
    public function __construct(Usersprofiles $usersprofiles)
    {
        $this->_entity = $usersprofiles;
    }
}