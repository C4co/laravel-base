<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiAuthTest extends TestCase
{
    use RefreshDatabase;
    public $registerUrl = "/api/v1/register";
    public $loginUrl = "/api/v1/login";

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_send_error_when_register_new_user()
    {
        // seding nothing
        $this->call('POST', $this->registerUrl, [

        ])->assertStatus(422);

        // sending only name
        $this->call('POST', $this->registerUrl, [
            'name' => 'user'
        ])->assertStatus(422);

        // sending name and email
        $this->call('POST', $this->registerUrl, [
            'name' => 'user',
            'email' => 'user@gmail.com'
        ])->assertStatus(422);

        // sending wrong email
        $this->call('POST', $this->registerUrl, [
            'name' => 'user',
            'email' => 'usergmail.com',
            'password' => '123456'
        ])->assertStatus(422);
    }

    public function test_api_register_new_user_with_sucess()
    {
        $response = $this->call('POST', $this->registerUrl, [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '123456'
        ])->assertStatus(201);

        $token = $response->json()['data']['token'];

        $this->assertTrue(isset($token));
    }

    public function test_api_login_error()
    {
        $this->call('POST', $this->loginUrl, [])->assertStatus(401);

        $this->call('POST', $this->loginUrl, [
            'name' => 'undefined'
        ])->assertStatus(401);

        $this->call('POST', $this->loginUrl, [
            'email' => 'undefined'
        ])->assertStatus(401);

        $this->call('POST', $this->loginUrl, [
            'name' => 'undefined',
            'email' => 'undefined'
        ])->assertStatus(401);
    }

    public function test_api_login_success()
    {
        // register
        $this->call('POST', $this->registerUrl, [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '123455'
        ])->assertStatus(201);

        $this->call('POST', $this->loginUrl, [
            'email' => 'user@gmail.com',
            'password' => '123455'
        ])->assertStatus(200);
    }
}
