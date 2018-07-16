<?php

namespace App\Containers\BoardMembers\Tasks;

use App\Containers\BoardMembers\Data\Repositories\BoardMembersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBoardMembersTask extends Task
{

    private $repository;

    public function __construct(BoardMembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
