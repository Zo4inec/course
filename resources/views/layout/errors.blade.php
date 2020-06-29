@if($errors->count())
    <div class="alert alert-danger mt-4">
        <ul class="mb-0 list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
