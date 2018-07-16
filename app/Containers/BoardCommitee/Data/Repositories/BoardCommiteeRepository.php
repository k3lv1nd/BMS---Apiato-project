<?php

namespace App\Containers\BoardCommitee\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardCommiteeRepository
 */
class BoardCommiteeRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
