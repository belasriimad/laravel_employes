@if($errors->any())
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger border border-danger rounded-0 mb-1">
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

