<?php

namespace App\Containers\Member\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateMemberAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
            'name'=>$request->input('name'),
            'email'=>$request->input('email')
        ];

        $member = Apiato::call('Member@CreateMemberTask', [$data]);

        return $member;
    }
}
