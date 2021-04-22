<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShortControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function it_should_return_the_slug_of_a_short()
    {
        $response = $this->post('api/shorten', [
            'longUrl'=> 'https://laravel.com/docs/8.x/testing',
        ]);

        
    }
}
