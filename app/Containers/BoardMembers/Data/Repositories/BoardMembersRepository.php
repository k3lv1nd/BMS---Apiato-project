<?php

namespace App\Containers\BoardMembers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardMembersRepository
 */
class BoardMembersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
