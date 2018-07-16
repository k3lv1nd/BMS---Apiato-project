<?php

namespace App\Containers\BoardCommitee\Tasks;

use App\Containers\BoardCommitee\Data\Repositories\BoardCommiteeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBoardCommiteeTask extends Task
{

    private $repository;

    public function __construct(BoardCommiteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
