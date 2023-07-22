<?php
namespace App\Domain\IRepository;

use App\DTO\Language\CreateLanguageDTO;
use App\DTO\Language\DeleteLanguageDTO;
use App\DTO\Language\ShowLanguageDTO;
use App\DTO\Language\Session\CreateSessionLanguageDTO;
use App\DTO\Language\Session\UpdateSessionLanguageDTO;
use App\DTO\Language\Session\ShowSessionLanguageDTO;

interface ILanguageRepository
{
    public static function Create(CreateLanguageDTO $context);
    public static function Delete(DeleteLanguageDTO $context);
    public static function All();
    public static function Show(ShowLanguageDTO $context);
    // Session
    public static function SessionCreate(CreateSessionLanguageDTO $context);
    public static function SessionShow(ShowSessionLanguageDTO $context);
    public static function SessionUpdate(UpdateSessionLanguageDTO $context);
}