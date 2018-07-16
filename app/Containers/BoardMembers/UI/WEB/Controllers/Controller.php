<?php

namespace App\Containers\BoardMembers\UI\WEB\Controllers;

use App\Containers\BoardMembers\UI\WEB\Requests\CreateBoardMembersRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\DeleteBoardMembersRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\GetAllBoardMembersRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\FindBoardMembersByIdRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\UpdateBoardMembersRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\StoreBoardMembersRequest;
use App\Containers\BoardMembers\UI\WEB\Requests\EditBoardMembersRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\BoardMembers\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardMembersRequest $request
     */
    public function index(GetAllBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@GetAllBoardMembersAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardMembersByIdRequest $request
     */
    public function show(FindBoardMembersByIdRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@FindBoardMembersByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardMembersRequest $request
     */
    public function create(CreateBoardMembersRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardMembersRequest $request
     */
    public function store(StoreBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@CreateBoardMembersAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardMembersRequest $request
     */
    public function edit(EditBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@GetBoardMembersByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardMembersRequest $request
     */
    public function update(UpdateBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@UpdateBoardMembersAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardMembersRequest $request
     */
    public function delete(DeleteBoardMembersRequest $request)
    {
         $result = Apiato::call('BoardMembers@DeleteBoardMembersAction', [$request]);

         // ..
    }
}
