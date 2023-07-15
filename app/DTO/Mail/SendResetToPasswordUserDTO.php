<?php
namespace App\DTO\Mail;

final class SendResetToPasswordUserDTO
{
    public string $Email;
    public string|null $Password;

    public static function AutoMap(mixed $args): SendResetToPasswordUserDTO
    {
        $dto = new self();
        $dto->Email = $args['Email'] ? $args['Email'] : null;
        $dto->Password = $args['Password'] ? $args['Password'] : null;
        return $dto;
    }
}