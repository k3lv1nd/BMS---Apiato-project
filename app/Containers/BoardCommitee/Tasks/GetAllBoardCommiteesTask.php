<?php

namespace App\Containers\BoardCommitee\Tasks;

use App\Containers\BoardCommitee\Data\Repositories\BoardCommiteeRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBoardCommiteesTask extends Task
{

    private $repository;

    public function __construct(BoardCommiteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
