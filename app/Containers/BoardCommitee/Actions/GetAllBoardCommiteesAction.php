<?php

namespace App\Containers\BoardCommitee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllBoardCommiteesAction extends Action
{
    public function run(Request $request)
    {
        $boardcommitees = Apiato::call('BoardCommitee@GetAllBoardCommiteesTask');

        return $boardcommitees;
    }
}
