<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdsPageTest extends TestCase
{
    public function testHomePageStatus(): void
    {
        $response = $this->get('/ads');

        $response->assertOk();
    }
}
