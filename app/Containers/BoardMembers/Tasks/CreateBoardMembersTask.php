<?php

namespace App\Containers\BoardMembers\Tasks;

use App\Containers\BoardMembers\Data\Repositories\BoardMembersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBoardMembersTask extends Task
{

    private $repository;

    public function __construct(BoardMembersRepository $repository)
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
