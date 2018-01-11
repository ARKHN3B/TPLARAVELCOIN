<?php

namespace Laracoin\Repositories;


class BaseRepositories implements InterfaceRepositories
{

    protected $_entity;

    function getUserProfileByID($id)
    {
        return $this->_entity->all()->where('users_id', $id);
    }
}