<?php

namespace Laracoin\Repositories;

use Laracoin\Users_profiles;

class UserProfileRepository extends BaseRepositories
{
    public function __construct(Users_profiles $usersprofiles)
    {
        $this->_entity = $usersprofiles;
    }
}