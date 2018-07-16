<?php

namespace App\Containers\Member\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateMemberAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $member = Apiato::call('Member@UpdateMemberTask', [$request->id, $data]);

        return $member;
    }
}
