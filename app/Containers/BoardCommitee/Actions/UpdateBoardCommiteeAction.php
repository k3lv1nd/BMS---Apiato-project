<?php

namespace App\Containers\BoardCommitee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardCommiteeAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $boardcommitee = Apiato::call('BoardCommitee@UpdateBoardCommiteeTask', [$request->id, $data]);

        return $boardcommitee;
    }
}
