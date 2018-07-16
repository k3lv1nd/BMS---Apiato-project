<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBoardAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
            'name' => $request->input('name'),
        ];

        $board = Apiato::call('Board@CreateBoardTask', [$data]);

        return $board;
    }
}
