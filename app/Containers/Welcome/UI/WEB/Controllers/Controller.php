<?php

namespace App\Containers\Welcome\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
    public function index (request $request){
        $members = Apiato::call(FindMemberByIdAction::class, [$request->xxx, $request->yyy]);


        return view('member::index')->with('members', $members);
    }
    public function sayWelcome()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('welcome::welcome-page');
    }
    public function boardEntry()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('board::boardhome');
    }
}
