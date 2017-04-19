<form>
  Title: <input type="text" id="title">{{ $post->title }}<br>
  Slug: <input type="text" id="slug">{{ $post->slug }}<br>
  Body: <input type="text" id="body">{{ $post->body }}<br>
  <input type="submit" value="Submit">
</form>