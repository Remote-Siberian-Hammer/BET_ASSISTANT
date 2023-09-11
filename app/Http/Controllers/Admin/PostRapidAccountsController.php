<?php

namespace App\Http\Controllers\Admin;

use App\Core\DTO\RapidUser\CreateRapidUserDTO;
use App\Core\DTO\RapidUser\DeleteRapidUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Rapid\CreateRapidAccountRequest;
use App\Http\Requests\Rapid\DeleteRapidAccountRequest;
use App\Http\Requests\Rapid\UpdateRapidAccountRequest;
use App\Services\RapidUserService;
use DateTime;

class PostRapidAccountsController extends Controller
{
    protected DateTime $dateTime;
    public function __construct()
    {
        $this->dateTime = new DateTime();
    }

    public function create(CreateRapidAccountRequest $request, RapidUserService $service)
    {
        $request->validated();
        $service->createAction(
            new CreateRapidUserDTO(
                $request["type"],
                $request["host"],
                $request["access_key"],
                0,
                $request["count"],
                $this->dateTime->format('Y-m-d H:i:s')
            )
        );
        return redirect()
            ->route("admin.rapid_parser.page")
            ->with("success", "Аккаунт добавлен!");
    }

    public function delete(DeleteRapidAccountRequest $request, RapidUserService $service)
    {
        $request->validated();
        $service->deleteAction(
            new DeleteRapidUserDTO(
                $request["id"]
            )
        );
        return back()
            ->with("success", "Аккаунт удалён!");
    }
}
