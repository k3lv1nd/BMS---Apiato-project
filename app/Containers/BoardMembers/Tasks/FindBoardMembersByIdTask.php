<?php

namespace App\Containers\BoardMembers\Tasks;

use App\Containers\BoardMembers\Data\Repositories\BoardMembersRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBoardMembersByIdTask extends Task
{

    private $repository;

    public function __construct(BoardMembersRepository $repository)
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
