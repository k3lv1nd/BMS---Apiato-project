<?php

namespace App\Containers\BoardMembers\Tasks;

use App\Containers\BoardMembers\Data\Repositories\BoardMembersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBoardMembersTask extends Task
{

    private $repository;

    public function __construct(BoardMembersRepository $repository)
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
