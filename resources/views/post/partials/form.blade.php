<div>
    <input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}">
</div>
@error('title')
    {{ $message }}
@enderror
<div>
    <textarea name="content">{{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
@error('content')
    {{ $message }}
@enderror
