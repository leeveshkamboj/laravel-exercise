@extends("layouts.app")

@section('title', 'Blog Posts')

@section('content')
    @if (session('status'))
        <div style="background-color: red; color:white">
            {{ session('status') }}
        </div>
    @endif
    @forelse ($posts as $index => $post)
        @include("post.partials.post")
    @empty
        <div>No Posts!</div>
    @endforelse

@endsection
