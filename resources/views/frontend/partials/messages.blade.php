
@if ($errors->any())
    <div class="alert alert-danger">

  <button type="button" class="close" data-dismiss="alert">&times;</button>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
  <div class="alert alert-success">
    <p>{{ Session::get('success') }}</p>
  </div>
@endif

@if (Session::has('error'))
  <div class="alert alert-danger">
    <p>{{ Session::get('error') }}</p>
  </div>

@endif
