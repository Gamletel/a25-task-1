<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_register_employee_with_all_fields(): void
    {
        $response = $this->post('api/employees/create',[
            'email'=>'test1@mail.ru',
            'password'=>'test1password',
        ]);

        $response->assertStatus(200);
    }

    public function test_register_employee_with_not_unique_email()
    {
        $response = $this->post('api/employees/create',[
            'email'=>'test1@mail.ru',
            'password'=>'test2password',
        ]);

        $response->assertStatus(422);
    }

    public function test_register_employee_without_email()
    {
        $response = $this->post('api/employees/create',[
            'password'=>'test3password',
        ]);

        $response->assertStatus(422);
    }

    public function test_register_employee_without_password()
    {
        $response = $this->post('api/employees/create',[
            'email'=>'test4@mail.ru',
        ]);

        $response->assertStatus(422);
    }
    public function test_register_employee_without_all_fields()
    {
        $response = $this->post('api/employees/create');

        $response->assertStatus(422);
    }
}
