<?php

namespace App\Containers\BoardCommitee\Tasks;

use App\Containers\BoardCommitee\Data\Repositories\BoardCommiteeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBoardCommiteeTask extends Task
{

    private $repository;

    public function __construct(BoardCommiteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
