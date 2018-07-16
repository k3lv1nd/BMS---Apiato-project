<?php

namespace App\Containers\Member\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteMemberAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Member@DeleteMemberTask', [$request->id]);
    }
}
