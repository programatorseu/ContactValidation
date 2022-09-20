<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /** @test */
    public function page_contains_livewire_component()
    {
        $this->get('/')->assertSeeLiveWire('contanct-form');
    }
}
