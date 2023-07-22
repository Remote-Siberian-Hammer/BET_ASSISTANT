<?php
namespace App\Repository;

use App\Models\Language;
use App\Models\SessionLanguage;
use App\Domain\IRepository\ILanguageRepository;
use App\DTO\Language\CreateLanguageDTO;
use App\DTO\Language\DeleteLanguageDTO;
use App\DTO\Language\ShowLanguageDTO;
use App\DTO\Language\Session\CreateSessionLanguageDTO;
use App\DTO\Language\Session\UpdateSessionLanguageDTO;
use App\DTO\Language\Session\ShowSessionLanguageDTO;

final class LanguageRepository implements ILanguageRepository
{
    public static function Create(CreateLanguageDTO $context)
    {
        $model = new Language();
        $model->Language = $context->Language;
        $model->save();
        return $model;
    }

    public static function Delete(DeleteLanguageDTO $context)
    {
        $model = Language::find($context->Id);
        $model->delete();
        return $model;
    }

    public static function All()
    {
        return Language::latest()->get();
    }

    public static function Show(ShowLanguageDTO $context)
    {
        return Language::where('id', $context->Id)
            ->latest()
            ->get();
    }

    public static function SessionCreate(CreateSessionLanguageDTO $context)
    {
        $model = new SessionLanguage();
        $model->LanguageId = $context->LanguageId;
        $model->UserId = $context->UserId;
        $model->save();
        return $model;
    }

    public static function SessionShow(ShowSessionLanguageDTO $context)
    {
        return SessionLanguage::where('UserId', $context->UserId)
            ->latest()
            ->get();
    }

    public static function SessionUpdate(UpdateSessionLanguageDTO $context)
    {
        $model = SessionLanguage::find($context->Id);
        $model->LanguageId = $context->LanguageId;
        $model->UserId = $context->UserId;
        $model->save();
        return $model;
    }
}