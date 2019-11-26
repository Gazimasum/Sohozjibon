@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Update
        </div>

          <div class="card-body">
            <form action="{{ route('admin.issuedbook.update' ,$issuedbook->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('backend.partials.messages')


                      <div class="form-group">
                          <label>Student Name :</label>
                          {{$issuedbook->student->name}}
                      </div>

                          <div class="form-group">
                          <label>Book Name :</label>
                          {{$issuedbook->book->name}}
                          </div>


                          <div class="form-group">
                          <label>ISBN :</label>
                          {{$issuedbook->book->isbnn_number}}
                          </div>

                          <div class="form-group">
                          <label>Book Issued Date :</label>
                          {{$issuedbook->issues_date}}
                          </div>


                          <div class="form-group">
                          <label>Book Returned Date :</label>
                          @if($issuedbook->return_date=="")

                                Not Return Yet
                    @else
                      {{$issuedbook->return_date}}
                    @endif
                                                  </div>

                          <div class="form-group">
                          <label>Fine (in BDT) :</label>

                          @if($issuedbook->fine=="")

                          <input class="form-control" type="text" name="fine" id="fine"  required />

                        @else
                          {{$issuedbook->fine}}
                        @endif
                          </div>
                          @if($issuedbook->status==0)

                          <button type="submit" name="return" id="submit" class="btn btn-info">Return Book </button>

                           </div>
                         @endif

                                                              </form>
                                                      </div>
                                                  </div>
                                                      </div>

                                  </div>
@endsection
