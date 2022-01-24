@extends("layouts.app")

@section("title", "Post")

@section("content")

@if ($post['is_new'])
    <div>New Post!</div>
@else
    <div>Old Post!</div>
@endif

<h1>{{ $post['title'] }}</h1>
<p>
    {{ $post['content'] }}
</p>
@endsection
