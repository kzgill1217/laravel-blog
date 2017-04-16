<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Post;

class ViewSinglePostTest extends DuskTestCase
{
    
    use DatabaseMigrations;
    /**
     * A testing to see if a single post can be seen
     *
     * @return should see the $post-body 
     */
    public function testViewSinglePost()
    {
        // Create a post with the body 'first post' and save it
        $post = factory(Post::class)->create(['body' => 'first post']);
        $post->save();
    
        // Start a browser and visit the url where the post is located
        $this->browse(function (Browser $browser) use ($post) {
            $browser->visit('/posts/' . $post->id)
                    ->assertSee('first post');
        });
    }
}
