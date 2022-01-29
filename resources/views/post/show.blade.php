@extends("layouts.app")

@section('title', 'Post')

@section('content')

    @if (session('status'))
        <div style="background-color: green; color:white">
            {{ session('status') }}
        </div>
    @endif

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
