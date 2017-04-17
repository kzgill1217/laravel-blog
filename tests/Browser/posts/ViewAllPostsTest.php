<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Post;

class ViewAllPostsTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * Testing by creating two posts and then visiting /posts to see if all of them show
     *
     * Should see $post->body of each post
     */
    public function testViewAllPosts()
    {
        $post = factory(Post::class)->create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'body' => 'first post']);
        $post->save();
        
          $post2 = factory(Post::class)->create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'body' => 'second post']);
          $post2->save();
    
    
        // Start a browser and visit the url where the post is located
        $this->browse(function (Browser $browser) use ($post, $post2) {
            $browser->visit('/posts')
                    ->assertSee('first post')
                    ->assertSee('second post');
        });
    }
}
