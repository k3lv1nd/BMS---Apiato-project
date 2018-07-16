<?php

namespace App\Containers\Member\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllMembersAction extends Action
{
    public function run(Request $request)
    {
        $members = Apiato::call('Member@GetAllMembersTask');

        return $members;
    }
}
