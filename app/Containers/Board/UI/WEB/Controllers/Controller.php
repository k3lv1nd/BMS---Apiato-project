<?php

namespace App\Containers\Board\UI\WEB\Controllers;

use App\Containers\Board\UI\WEB\Requests\CreateBoardRequest;
use App\Containers\Board\UI\WEB\Requests\DeleteBoardRequest;
use App\Containers\Board\UI\WEB\Requests\GetAllBoardsRequest;
use App\Containers\Board\UI\WEB\Requests\FindBoardByIdRequest;
use App\Containers\Board\UI\WEB\Requests\UpdateBoardRequest;
use App\Containers\Board\UI\WEB\Requests\StoreBoardRequest;
use App\Containers\Board\UI\WEB\Requests\EditBoardRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Board\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardsRequest $request
     */
    public function index(GetAllBoardsRequest $request)
    {
        $boards = Apiato::call('Board@GetAllBoardsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardByIdRequest $request
     */
    public function show(FindBoardByIdRequest $request)
    {
        $board = Apiato::call('Board@FindBoardByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardRequest $request
     */
    public function create(CreateBoardRequest $request)
    {
        return view('board::createboard');
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardRequest $request
     */
    public function store(StoreBoardRequest $request)
    {
       // return $request->all();
        $board = Apiato::call('Board@CreateBoardAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardRequest $request
     */
    public function edit(EditBoardRequest $request)
    {
        $board = Apiato::call('Board@GetBoardByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardRequest $request
     */
    public function update(UpdateBoardRequest $request)
    {
        $board = Apiato::call('Board@UpdateBoardAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardRequest $request
     */
    public function delete(DeleteBoardRequest $request)
    {
         $result = Apiato::call('Board@DeleteBoardAction', [$request]);

         // ..
    }
}
