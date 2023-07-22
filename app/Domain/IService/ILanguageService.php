<?php
namespace App\Domain\IService;

use App\DTO\Language\CreateLanguageDTO;
use App\DTO\Language\DeleteLanguageDTO;
use App\DTO\Language\ShowLanguageDTO;
use App\DTO\Language\Session\CreateSessionLanguageDTO;
use App\DTO\Language\Session\UpdateSessionLanguageDTO;
use App\DTO\Language\Session\ShowSessionLanguageDTO;

interface ILanguageService
{
    public function CreateService(CreateLanguageDTO $context);
    public function DeleteService(DeleteLanguageDTO $context);
    public function AllService();
    public function ShowService(ShowLanguageDTO $context);
    // Sesson
    public function CreateSessionService(CreateSessionLanguageDTO $context);
    public function ShowSessionService(ShowSessionLanguageDTO $context);
    public function UpdateSessionService(UpdateSessionLanguageDTO $context);
}