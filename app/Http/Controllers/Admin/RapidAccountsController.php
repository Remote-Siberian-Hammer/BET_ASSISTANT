<?php

namespace App\Http\Controllers\Admin;

use App\Core\DTO\RapidUser\ShowRapidUserDTO;
use App\Http\Controllers\Controller;
use App\Services\RapidUserService;

class RapidAccountsController extends Controller
{
    public function rapid_parser()
    {
        return view("admin/rapid/index");
    }

    public function rapid_account_list(RapidUserService $service)
    {
        return view("admin/rapid/accounts", [
            "account" => $service->allAction()
        ]);
    }

    public function rapid_account_create()
    {
        return view("admin/rapid/create_account");
    }

    public function rapid_account_show(int $rapid_account_id, RapidUserService $service)
    {
        return view("admin/rapid/show_account", [
            "rapid_account" => $service->showAction(
                new ShowRapidUserDTO(
                    $rapid_account_id
                )
            )
        ]);
    }
}
