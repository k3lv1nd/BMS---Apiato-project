<?php

namespace App\Containers\BoardMembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBoardMembersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('BoardMembers@DeleteBoardMembersTask', [$request->id]);
    }
}
