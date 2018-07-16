<?php

namespace App\Containers\Member\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MemberRepository
 */
class MemberRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...

    ];

}
