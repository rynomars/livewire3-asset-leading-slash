<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestControllerTest extends TestCase
{
    public function test_response_livewirejs_does_not_have_forward_slash(): void
    {
        $this->call('GET', '/')
            ->assertOk()
            ->assertSee('<script src="https://cheese.cloudfront.net/livewire/livewire.js', false);
    }
}
