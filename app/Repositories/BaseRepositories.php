<?php

namespace App\Repositories;


class BaseRepositories implements InterfaceRepositories
{

    protected $_entity;

    function getUserProfileByID($id)
    {
        $this->_entity->find($id);
    }
}