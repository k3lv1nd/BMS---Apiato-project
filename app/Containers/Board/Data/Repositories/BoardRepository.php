<?php

namespace App\Containers\Board\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardRepository
 */
class BoardRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
