<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteMemberTask extends Task
{

    private $repository;

    public function __construct(MemberRepository $repository)
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
