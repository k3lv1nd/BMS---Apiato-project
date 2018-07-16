<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindMemberByIdTask extends Task
{

    private $repository;

    public function __construct(MemberRepository $repository)
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
