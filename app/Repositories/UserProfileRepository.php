<?php

namespace Laracoin\Repositories;

use Illuminate\Support\Facades\DB;
use Laracoin\Users_profiles;

class UserProfileRepository extends BaseRepositories
{
    public function __construct(Users_profiles $usersprofiles)
    {
        $this->_entity = $usersprofiles;
    }

    public function update(array $parameters)
    {
        $query = 'UPDATE users_profiles SET firstname=:firstname, lastname=:lastname, birth=:birth, imagepath=:image, gender=:gender,
                  address=:address, phone=:phone WHERE users_id=:user_id';
        return $profile = DB::update($query, $parameters);
    }
}