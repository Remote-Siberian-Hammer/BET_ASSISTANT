<?php
namespace App\DTO\Mail;

final class SendCreateUserDTO
{
    public string $FirstName;
    public string $Email;
    public string $Password;

    public static function AutoMap(mixed $args): SendCreateUserDTO
    {
        $dto = new self();
        $dto->FirstName = $args['FirstName'];
        $dto->Email = $args['Email'] ? $args['Email'] : null;
        $dto->Password = $args['Password'];
        return $dto;
    }
}