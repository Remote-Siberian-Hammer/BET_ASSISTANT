<?php
namespace App\Domain\IRepository;

use App\DTO\AccountRapid\CreateAccountRapidDTO;
use App\DTO\AccountRapid\ShowAccountRapidDTO;
use App\DTO\AccountRapid\DeleteAccountRapidDTO;

interface IAccountRapidRepository
{
    public static function Create(CreateAccountRapidDTO $context);
    public static function Show(ShowAccountRapidDTO $context);
    public static function All();
    public static function Delete(DeleteAccountRapidDTO $context);
}