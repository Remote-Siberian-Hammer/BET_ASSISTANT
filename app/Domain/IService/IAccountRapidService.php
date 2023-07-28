<?php
namespace App\Domain\IService;

use App\DTO\AccountRapid\CreateAccountRapidDTO;
use App\DTO\AccountRapid\ShowAccountRapidDTO;
use App\DTO\AccountRapid\DeleteAccountRapidDTO;


interface IAccountRapidService
{
    public function CreateService(CreateAccountRapidDTO $context);
    public function ShowService(ShowAccountRapidDTO $context);
    public function AllService();
    public function DeleteService(DeleteAccountRapidDTO $context);
}