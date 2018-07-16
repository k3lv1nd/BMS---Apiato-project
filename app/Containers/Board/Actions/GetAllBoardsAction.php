<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllBoardsAction extends Action
{
    public function run(Request $request)
    {
        $boards = Apiato::call('Board@GetAllBoardsTask');

        return $boards;
    }
}
