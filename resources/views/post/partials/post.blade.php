@if ($loop->even)
    <div>{{ $index }}. {{ $post['title'] }}</div>
@else
    <div style="background-color: silver">{{ $index }}. {{ $post['title'] }}</div>
@endif
