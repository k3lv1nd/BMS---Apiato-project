<?php

namespace App\Containers\BoardCommitee\Tasks;

use App\Containers\BoardCommitee\Data\Repositories\BoardCommiteeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBoardCommiteeByIdTask extends Task
{

    private $repository;

    public function __construct(BoardCommiteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
