@include('main');

<div class="list">
    @foreach($groups as $group)
        <div class="divArray">{{$group}}</div>
    @endforeach
</div>

@include('end');
