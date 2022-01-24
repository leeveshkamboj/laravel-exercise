@extends("layouts.app")

@section('title', 'Blog Posts')

@section('content')

    @forelse ($posts as $index => $post)
        @include("post.partials.post")
    @empty
        <div>No Posts!</div>
    @endforelse

@endsection
