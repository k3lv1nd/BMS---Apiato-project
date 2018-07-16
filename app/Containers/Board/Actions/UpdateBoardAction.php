<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $board = Apiato::call('Board@UpdateBoardTask', [$request->id, $data]);

        return $board;
    }
}
