<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMembersTask extends Task
{

    private $repository;

    public function __construct(MemberRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
