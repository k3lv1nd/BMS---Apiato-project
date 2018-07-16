<?php

namespace App\Containers\Member\Tasks;

use App\Containers\Member\Data\Repositories\MemberRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMemberTask extends Task
{

    private $repository;

    public function __construct(MemberRepository $repository)
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
