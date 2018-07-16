<?php

namespace App\Containers\BoardMembers\Tasks;

use App\Containers\BoardMembers\Data\Repositories\BoardMembersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBoardMembersTask extends Task
{

    private $repository;

    public function __construct(BoardMembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
