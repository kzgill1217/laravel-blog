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
     * Going from 'add a new post' link to a create post page
     *
     * Should see a form with Title: as a label
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
