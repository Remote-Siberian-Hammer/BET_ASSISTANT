<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\Domain\Service\UserService;
use App\DTO\Mail\SendCreateUserDTO;

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

        // Проверка SendCreateUserDTO
        $dtoSendCreateUser = new SendCreateUserDTO();
        $dtoSendCreateUser->FirstName = "Игорь";
        $dtoSendCreateUser->Email = "howeda1586@nasskar.com";
        $dtoSendCreateUser->Password = "babka123";

        $userService = new UserService();
        $user = $userService->CreateUserService($dtoCreateUser, $dtoSendCreateUser);

        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals($user->FirstName, "Игорь");
        $this->assertEquals($user->LastName, "Мохов");
        $this->assertEquals($user->Email, "howeda1586@nasskar.com");
        $this->assertEquals($user->Phone, null);
    }

    /**
     * A basic feature test show_by_id.
     */
    public function test_show_by_id(): void
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
        // Проверка SendCreateUserDTO
        $dtoSendCreateUser = new SendCreateUserDTO();
        $dtoSendCreateUser->FirstName = "Игорь";
        $dtoSendCreateUser->Email = "howeda1586@nasskar.com";
        $dtoSendCreateUser->Password = "babka123";

        // Вызов сервиса UserService
        $userService = new UserService();
        $user = $userService->CreateUserService($dtoCreateUser, $dtoSendCreateUser);

        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals($user->FirstName, "Игорь");
        $this->assertEquals($user->LastName, "Мохов");
        $this->assertEquals($user->Email, "howeda1586@nasskar.com");
        $this->assertEquals($user->Phone, null);

        $user_id = json_decode(collect($user), true)['id'];

        $dtoShowByIdUser = new SearchUserByIdDTO();
        $dtoShowByIdUser->Id = $user_id;

        // Проверка SearchUserByIdDTO
        $this->assertEquals($dtoShowByIdUser->Id, $user_id);

        // Вызов сервиса UserService
        $userService = new UserService();
        $user = $userService->ShowUserByIdService($dtoShowByIdUser);
        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals(rtrim($user->FirstName), "Игорь");
        $this->assertEquals(rtrim($user->LastName), "Мохов");
        $this->assertEquals($user->Email, "howeda1586@nasskar.com");
        $this->assertEquals($user->Phone, null);
    }

    /**
     * A basic feature test show_by_email.
     */
    public function test_show_by_email(): void
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

        // Проверка SendCreateUserDTO
        $dtoSendCreateUser = new SendCreateUserDTO();
        $dtoSendCreateUser->FirstName = "Игорь";
        $dtoSendCreateUser->Email = "howeda1586@nasskar.com";
        $dtoSendCreateUser->Password = "babka123";

        // Вызов сервиса UserService
        $userService = new UserService();
        $user = $userService->CreateUserService($dtoCreateUser, $dtoSendCreateUser);

        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals($user->FirstName, "Игорь");
        $this->assertEquals($user->LastName, "Мохов");
        $this->assertEquals($user->Email, "howeda1586@nasskar.com");
        $this->assertEquals($user->Phone, null);

        $user_email = json_decode(collect($user), true)['Email'];

        $dtoShowByEmailUser = new SearchUserByEmailDTO();
        $dtoShowByEmailUser->Email = $user_email;

        // Проверка SearchUserByIdDTO
        $this->assertEquals($dtoShowByEmailUser->Email, $user_email);

        // Вызов сервиса UserService
        $userService = new UserService();
        $user = json_decode($userService->ShowUserByEmailService($dtoShowByEmailUser)[0], true);
        
        // Проверка CreateUserService
        $this->assertNotNull($user);
        $this->assertEquals(rtrim($user['FirstName']), "Игорь");
        $this->assertEquals(rtrim($user['LastName']), "Мохов");
        $this->assertEquals($user['Email'], "howeda1586@nasskar.com");
        $this->assertEquals($user['Phone'], null);
    }
}
