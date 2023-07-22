<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LanguageResource;
use App\Http\Resources\SessionLanguageResource;
use Illuminate\Http\Request;
use App\Domain\Service\LanguageService;
use App\DTO\Language\CreateLanguageDTO;
use App\DTO\Language\DeleteLanguageDTO;
use App\DTO\Language\ShowLanguageDTO;
use App\DTO\Language\Session\CreateSessionLanguageDTO;
use App\DTO\Language\Session\UpdateSessionLanguageDTO;
use App\DTO\Language\Session\ShowSessionLanguageDTO;

class LanguageController extends Controller
{
    public function create(Request $request, LanguageService $service)
    {
        return new LanguageResource(
            $service->CreateService(
                CreateLanguageDTO::AutoMap($request)
            )
        );
    }

    public function delete(int $language_id, LanguageService $service)
    {
        return new LanguageResource(
            $service->DeleteService(
                DeleteLanguageDTO::AutoMap($language_id)
            )
        );
    }

    public function all(LanguageService $service)
    {
        return $service->AllService();
    }

    public function show(int $language_id, LanguageService $service)
    {
        return $service->ShowService(
            ShowLanguageDTO::AutoMap($language_id)
        );
    }

    public function sessionCreate(Request $request, LanguageService $service)
    {
        return new SessionLanguageResource(
            $service->CreateSessionService(
                CreateSessionLanguageDTO::AutoMap($request)
            )
        );
    }

    public function sessionShow(int $user_id, LanguageService $service)
    {
        return $service->ShowSessionService(
            ShowSessionLanguageDTO::AutoMap($user_id)
        );
    }

    public function sessionUpdate(Request $request, LanguageService $service)
    {
        return new SessionLanguageResource(
            $service->UpdateSessionService(
                UpdateSessionLanguageDTO::AutoMap($request)
            )
        );
    }
}
