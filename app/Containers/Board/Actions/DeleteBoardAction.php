<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBoardAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Board@DeleteBoardTask', [$request->id]);
    }
}
