<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMemberTask extends Task
{

    private $repository;

    public function __construct(MemberRepository $repository)
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
