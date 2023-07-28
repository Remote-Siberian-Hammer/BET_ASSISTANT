<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\AccountRapidService;
use App\Domain\Service\ValidationService;
use App\DTO\AccountRapid\CreateAccountRapidDTO;
use App\DTO\AccountRapid\ShowAccountRapidDTO;
use App\DTO\AccountRapid\DeleteAccountRapidDTO;

class AccountRapidController extends Controller
{
    public function create(Request $request, AccountRapidService $service, ValidationService $validate)
    {
        $is_valid = $validate->AccountRapidValidationService($request);
        if (key_exists('errors', $is_valid))
        {
            return $is_valid;
        }
        return $service->CreateService(
            CreateAccountRapidDTO::AutoMap($request)
        );
    }

    public function all(AccountRapidService $service)
    {
        return $service->AllService();
    }

    public function show(int $account_rapid_id, AccountRapidService $service)
    {
        return $service->ShowService(
            ShowAccountRapidDTO::AutoMap($account_rapid_id)
        );
    }

    public function delete(int $account_rapid_id, AccountRapidService $service)
    {
        return $service->DeleteService(
            DeleteAccountRapidDTO::AutoMap($account_rapid_id)
        );
    }
}
