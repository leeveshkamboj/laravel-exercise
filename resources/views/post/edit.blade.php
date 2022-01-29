@extends("layouts.app")

@section('title', 'Update post')

@section('content')

    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method("PUT")
        @include('post.partials.form')
        <div>
            <input type="submit" value="Update">
        </div>
    </form>

@endsection
