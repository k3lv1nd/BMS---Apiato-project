<?php

namespace App\Containers\Board\Tasks;

use App\Containers\Board\Data\Repositories\BoardRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBoardTask extends Task
{

    private $repository;

    public function __construct(BoardRepository $repository)
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
