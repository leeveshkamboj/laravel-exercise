@if ($loop->even)
    <div>{{ $index }}. {{ $post['title'] }}</div>
@else
    <div style="background-color: silver">{{ $index }}. {{ $post['title'] }}</div>
@endif


<form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
    @method("DELETE")
    @csrf
    <input type="submit" value="Delete">
</form>
