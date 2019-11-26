@extends('backend.layouts.master')
@section('content')

<div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Manage Categories
        </div>

          <div class="card-body">
            @include('backend.partials.messages')
            <div class="table table-responsive">

              <table class="table table-striped table-bordered table-hover" id="myTable">
                                      <thead>
                                          <tr>

                                              <th>Student Name</th>
                                              <th>Book Name</th>
                                              <th>ISBN </th>
                                              <th>Issued Date</th>
                                              <th>Return Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($issuedbooks as $ib)

                                          <tr class="odd gradeX">

                                              <td class="center">{{$ib->student->name}}</td>
                                              <td class="center">{{$ib->book->name}}</td>
                                              <td class="center">{{$ib->book->isbnn_number}}</td>
                                              <td class="center">{{$ib->issues_date}}</td>
                                              <td class="center">
                                                @if($ib->return_date=="")
                                              Not Return Yet
                                              @else
                                              {{$ib->return_date}}
                                                @endif
                                              </td>
                                              <td class="center">

                                              <a href="{!! route('admin.issuedbook.edit',$ib->id) !!}"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>

                                              </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                      </div>
                      <!--End Advanced Tables -->
                  </div>
              </div>



      </div>
      </div>


@endsection
