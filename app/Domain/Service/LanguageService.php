<?php
namespace App\Domain\Service;

use App\Domain\IService\ILanguageService;
use App\Repository\LanguageRepository;
use App\DTO\Language\CreateLanguageDTO;
use App\DTO\Language\DeleteLanguageDTO;
use App\DTO\Language\ShowLanguageDTO;
use App\DTO\Language\Session\CreateSessionLanguageDTO;
use App\DTO\Language\Session\UpdateSessionLanguageDTO;
use App\DTO\Language\Session\ShowSessionLanguageDTO;

class LanguageService implements ILanguageService
{
    private LanguageRepository $repository;
    public function __construct()
    {
        $this->repository = new LanguageRepository();
    }

    public function CreateService(CreateLanguageDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function DeleteService(DeleteLanguageDTO $context)
    {
        return $this->repository->Delete($context);
    }

    public function AllService()
    {
        return $this->repository->All();
    }

    public function ShowService(ShowLanguageDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function CreateSessionService(CreateSessionLanguageDTO $context)
    {
        return $this->repository->SessionCreate($context);
    }

    public function UpdateSessionService(UpdateSessionLanguageDTO $context)
    {
        return $this->repository->SessionUpdate($context);
    }

    public function ShowSessionService(ShowSessionLanguageDTO $context)
    {
        return $this->repository->SessionShow($context);
    }
}