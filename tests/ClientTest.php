<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */


    public function testClientDashboard()
    {
        $this->visit('/index')
             ->click('Add New client')
             ->seePageIs('/addclient');
    }
}
