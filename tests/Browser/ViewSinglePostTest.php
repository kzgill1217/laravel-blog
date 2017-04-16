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
     * A basic browser test example.
     *
     * @return void
     */
    public function testViewSinglePost()
    {
        $post = factory(Post::class)->create(['body' => 'first post']);
        
        $post->save();
        
        
        $this->browse(function (Browser $browser) use ($post) {
            $browser->visit('/posts/' . $post->id)
                    ->assertSee('first post');
        });
    }
}
