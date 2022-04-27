@include('main');


    <div class="list">
    @foreach($groups as $group)
        <li>{{$group}}</li>

    @endforeach
    </div>


@include('end');
