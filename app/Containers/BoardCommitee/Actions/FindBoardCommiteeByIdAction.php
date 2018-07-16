<?php

namespace App\Containers\BoardCommitee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBoardCommiteeByIdAction extends Action
{
    public function run(Request $request)
    {
        $boardcommitee = Apiato::call('BoardCommitee@FindBoardCommiteeByIdTask', [$request->id]);

        return $boardcommitee;
    }
}
