<?php

namespace App\Containers\BoardCommitee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBoardCommiteeAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('BoardCommitee@DeleteBoardCommiteeTask', [$request->id]);
    }
}
