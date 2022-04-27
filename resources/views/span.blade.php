@include('main');

<div class="list">
    @foreach($nums as $num)
        @if($num % 2 == 0)
            <span>{{$num}}</span>
        @endif
    @endforeach
</div>

@include('end');
