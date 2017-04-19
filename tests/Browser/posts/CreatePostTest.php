<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Post;

class CreatePostTest extends DuskTestCase
{
    
    use DatabaseMigrations;
    /**
     * Going from 'add a new post' button to form submit
     *
     * @return void
     */
    public function testCreatePost()
    {
  
    
        $this->browse(function (Browser $browser){
            $browser->visit('/posts')
                    ->clickLink('Create New Post')
                    ->assertPathIs('/posts/create')
                    ->assertSee('Title:');
        });
    }
}
