<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\DTO\User\CreateUserDTO;
use App\Domain\Service\UserService;



class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test create.
     */
    public function test_create(): void
    {
        $dtoCreateUser = new CreateUserDTO();
        $dtoCreateUser->FirstName = "Игорь";
        $dtoCreateUser->LastName = "Мохов";
        $dtoCreateUser->Email = "howeda1586@nasskar.com";
        $dtoCreateUser->Phone = null;
        $dtoCreateUser->Password = "babka123";
        // Проверка CreateUserDTO
        $this->assertEquals($dtoCreateUser->FirstName, "Игорь");
        $this->assertEquals($dtoCreateUser->LastName, "Мохов");
        $this->assertEquals($dtoCreateUser->Email, "howeda1586@nasskar.com");
        $this->assertEquals($dtoCreateUser->Phone, null);
        $this->assertEquals($dtoCreateUser->Password, "babka123");
        $userService = new UserService();
        $user = $userService->CreateUserService($dtoCreateUser);
        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals($user->FirstName, "Игорь");
        $this->assertEquals($user->LastName, "Мохов");
        $this->assertEquals($user->Email, "howeda1586@nasskar.com");
        $this->assertEquals($user->Phone, null);
        $this->assertEquals($user->Password, "babka123");
    }
}
