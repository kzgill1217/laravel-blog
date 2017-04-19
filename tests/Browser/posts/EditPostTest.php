<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Post;

class EditPostTest extends DuskTestCase
{
    
    use DatabaseMigrations;
    /**
     * Should be able to get to the edit post page
     *
     * Will see the edit page with the post id in the url
     */
    public function testEditPost()
    {
        $post = factory(Post::class)->create();
        
        $post->save();
        
        $this->browse(function (Browser $browser) use ($post) {
            $browser->visit('/posts/edit/' . $post->id)
                    ->assertSee($post->body);
        });
    }
}
