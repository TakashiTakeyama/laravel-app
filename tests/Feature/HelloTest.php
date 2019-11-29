<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class HelloTest extends TestCase
{
    // use DatabaseMigrations;

    // public function testHello()
    // {
    //     $this->assertTrue(true);

    //     $response = $this->get('/');
    //     $response->assertStatus(200);

    //     $response = $this->get('/hello');
    //     $response->assertStatus(302);

    //     $user = factory(User::class)->create();
    //     $response = $this->actingAs($user)->get('/hello');
    //     $response->assertStatus(200);

    //     $response = $this->get('/no_route');
    //     $response->assertStatus(404);

        // $arr = [];
        // $this->assertEmpty($arr);

        // $msg = "Hello";
        // $this->assertEquals('Hello', $msg);

        // $n = random_int(0, 100);
        // $this->assertLessThan(100, $n);
    // }

    public function testHello() {
        factory(User::class)->create([
            'name' => 'AAA',
            'emailf' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);

        factory(Person::class)->create([
            'name' => 'XXX',
            'email' => 'YYY@ZZZ.com',
            'age' => 123,
        ]);
    }
}