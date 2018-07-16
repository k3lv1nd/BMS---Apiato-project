<?php

namespace App\Containers\Member\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindMemberByIdAction extends Action
{
    public function run(Request $request)
    {
        $member = Apiato::call('Member@FindMemberByIdTask', [$request->id]);

        return $member;
    }
}
