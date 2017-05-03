<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


    public function testBasicExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Dream');
        });

    }

    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/loginView')
                ->type('email', 'rameshkafox@gmail.com')
                ->type('password', '1234567')
                ->click('.waves-effect')
                ->assertSee('Legal');
        });

        /**
         *  ->type('email', 'pasinduath@gmail.com')
         * ->type('password', '123456')
         * ->assertSee('Seller');
         */

        /**
         *  ->type('email', 'piyumir.amarasinghe@gmail.com')
         * ->type('password', '123456')
         * ->assertSee('Buyer');
         */
    }


    public function testUserLogOut()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('admin/admindashboard')
                ->assertSee('Legal')
                ->click('#signout')
                ->assertSee('Dream');
        });

    }


    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registerView')
                ->assertSee('Register')
                ->value('#username', 'Dilshan')
                ->value('#email', 'abdsithira@gmail.com')
                ->value('#password', '123456')
                ->value('#passwordreenter', '123456')
                // ->click('#recaptcha')
                //  ->value('#check','Agreed')
                ->click('.waves-effect')
                ->assertSee('Buyer');

        });


    }
}
