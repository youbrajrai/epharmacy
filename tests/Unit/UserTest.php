<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form(){
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_user_duplication(){
        $user1 = User::make([
            'name' => "Youbraj",
            'email' => "youbraj@gmail.com",
        ]);
        $user2 = User::make([
            'name' => "ram",
            'email' => "ram@gmail.com",
        ]);  
        $this->assertTrue($user1->email != $user2->email);
    }
    // public function test_delete_user(){
    //     $user = User::factory()->count(1)->make();
    //     $user = User::first();
    //     if($user){
    //         $user->delete();
    //     }
    //     $this->assertTrue(true);
    // }
    // public function test_it_stores_new_user(){
    //     $response = $this->post('/register',[
    //         'first_name' => "sai",
    //         'last_name' => "sai",
    //         'email' => "sai@gmail.com",
    //         'password' => "12345678",
    //         'password_confirmation' => "12345678",
    //     ]);
    //     $this->assertAuthenticated();
    //     $response->assertRedirect('/home');
    // }
    // public function test_database(){
    //     $this->assertDatabaseHas('users',[
    //         'name' => 'admin'
    //     ]);
    // }
}
