<?php

namespace App\Containers\BoardCommitee\UI\WEB\Controllers;

use App\Containers\BoardCommitee\UI\WEB\Requests\CreateBoardCommiteeRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\DeleteBoardCommiteeRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\GetAllBoardCommiteesRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\FindBoardCommiteeByIdRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\UpdateBoardCommiteeRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\StoreBoardCommiteeRequest;
use App\Containers\BoardCommitee\UI\WEB\Requests\EditBoardCommiteeRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\BoardCommitee\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardCommiteesRequest $request
     */
    public function index(GetAllBoardCommiteesRequest $request)
    {
        $boardcommitees = Apiato::call('BoardCommitee@GetAllBoardCommiteesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardCommiteeByIdRequest $request
     */
    public function show(FindBoardCommiteeByIdRequest $request)
    {
        $boardcommitee = Apiato::call('BoardCommitee@FindBoardCommiteeByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardCommiteeRequest $request
     */
    public function create(CreateBoardCommiteeRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardCommiteeRequest $request
     */
    public function store(StoreBoardCommiteeRequest $request)
    {
        $boardcommitee = Apiato::call('BoardCommitee@CreateBoardCommiteeAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardCommiteeRequest $request
     */
    public function edit(EditBoardCommiteeRequest $request)
    {
        $boardcommitee = Apiato::call('BoardCommitee@GetBoardCommiteeByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardCommiteeRequest $request
     */
    public function update(UpdateBoardCommiteeRequest $request)
    {
        $boardcommitee = Apiato::call('BoardCommitee@UpdateBoardCommiteeAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardCommiteeRequest $request
     */
    public function delete(DeleteBoardCommiteeRequest $request)
    {
         $result = Apiato::call('BoardCommitee@DeleteBoardCommiteeAction', [$request]);

         // ..
    }
}
