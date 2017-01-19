<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * A basic functional test exampl
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Iron Web Test');
    }
}
