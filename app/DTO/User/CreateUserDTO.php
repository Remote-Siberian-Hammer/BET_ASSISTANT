<?php
namespace App\DTO\User;

final class CreateUserDTO
{
    public string $FirstName;
    public string $LastName;
    public string|null $Email;
    public string|null $Phone;
    public string $Password;

    public static function AutoMap(mixed $args): CreateUserDTO
    {
        $dto = new self();
        $dto->FirstName = $args['FirstName'];
        $dto->LastName = $args['LastName'];
        $dto->Email = $args['Email'] ? $args['Email'] : null;
        $dto->Phone = $args['Phone'] ? $args['Phone'] : null;
        $dto->Password = $args['Password'];
        return $dto;
    }
}