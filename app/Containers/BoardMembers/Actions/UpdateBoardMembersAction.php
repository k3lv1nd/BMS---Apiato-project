<?php

namespace App\Containers\BoardMembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardMembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $boardmembers = Apiato::call('BoardMembers@UpdateBoardMembersTask', [$request->id, $data]);

        return $boardmembers;
    }
}
