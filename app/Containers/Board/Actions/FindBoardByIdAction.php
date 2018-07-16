<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBoardByIdAction extends Action
{
    public function run(Request $request)
    {
        $board = Apiato::call('Board@FindBoardByIdTask', [$request->id]);

        return $board;
    }
}
