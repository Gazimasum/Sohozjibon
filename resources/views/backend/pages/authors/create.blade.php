@extends('backend.layouts.master')

@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Add author
        </div>
                <div class="card-body">
                @include('backend.partials.messages')
              <form role="form" method="post" action="{!! route('admin.author.store') !!}">
                @csrf
              <div class="form-group">
              <label>Author Name</label>
              <input class="form-control" type="text" name="name" autocomplete="off" required />
            </div>
              <button type="submit" name="create" class="btn btn-info">Create </button>

                                      </form>

                                                </div>
                                            </div>
                                      </div>
                                      </div>

  <!-- main-panel ends -->
@endsection
