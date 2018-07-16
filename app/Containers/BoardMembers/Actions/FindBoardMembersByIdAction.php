<?php

namespace App\Containers\BoardMembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBoardMembersByIdAction extends Action
{
    public function run(Request $request)
    {
        $boardmembers = Apiato::call('BoardMembers@FindBoardMembersByIdTask', [$request->id]);

        return $boardmembers;
    }
}
