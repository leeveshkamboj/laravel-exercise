@extends("layouts.app")

@section('title', 'Create post')

@section('content')

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="title">
        </div>
        @error('title')
        {{ $message }}
        @enderror
        <div>
            <textarea name="content"></textarea>
        </div>
        @error('content')
        {{ $message }}
        @enderror
        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif --}}
        <div>
            <input type="submit" value="Create">
        </div>
    </form>

@endsection
