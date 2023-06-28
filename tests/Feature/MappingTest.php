<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MappingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_successfulMappingRouteWithXML(): void
    {
        $correctValue = '{"fullname":"Nafiseh Zeinali","username":"nafi3"}';
        $response = $this->get('/data-mapping/xml');
        $response->assertStatus(200);
        $this->assertJson($correctValue);
    }
    public function test_successfulMappingRouteWithJson(): void
    {
        $correctValue = '{"fullname":"Nafiseh Zeinali","username":"nafi3"}';
        $response = $this->get('/data-mapping/json');
        $response->assertStatus(200);
        $this->assertJson($correctValue);
    }


}
