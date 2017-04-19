<a href="{{ URL::route('posts.create') }}">Create New Post</a>

@foreach ($posts as $post)
    <p>{{ $post->body }}</p>
@endforeach


