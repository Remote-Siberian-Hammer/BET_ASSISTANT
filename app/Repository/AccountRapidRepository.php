<?php
namespace App\Repository;

use App\Models\AccountRapid;
use App\Domain\IRepository\IAccountRapidRepository;
use App\DTO\AccountRapid\CreateAccountRapidDTO;
use App\DTO\AccountRapid\ShowAccountRapidDTO;
use App\DTO\AccountRapid\DeleteAccountRapidDTO;


final class AccountRapidRepository implements IAccountRapidRepository
{
    public static function Create(CreateAccountRapidDTO $context)
    {
        $model = new AccountRapid();
        $model->Email = $context->Email;
        $model->RapidTocken = $context->RapidTocken;
        $model->SportScoreCountQuery = $context->SportScoreCountQuery;
        $model->TranslationMemoryWordCount = $context->TranslationMemoryWordCount;
        $model->NextUpdate = $context->NextUpdate;
        $model->save();
        return $model;
    }

    public static function Show(ShowAccountRapidDTO $context)
    {
        return AccountRapid::find($context->Id)->get();
    }

    public static function All()
    {
        return AccountRapid::latest()->get();
    }

    public static function Delete(DeleteAccountRapidDTO $context)
    {
        $model = AccountRapid::find($context->Id);
        $model->delete();
        return $model;
    }
}