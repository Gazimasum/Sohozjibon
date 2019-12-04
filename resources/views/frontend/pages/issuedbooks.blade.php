@extends('frontend.layouts.master')
@section('content')
<div class="container" style="padding:20px; margin-bottom:30px;">
  <div class="row">
                  <div class="col-md-12">
                      <!-- Advanced Tables -->
                      <div class="panel panel-default">
                          <div class="panel-heading">
                            <h2>Issued Books</h2>
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>

                                              <th>Book Name</th>
                                              <th>ISBN </th>
                                              <th>Issued Date</th>
                                              <th>Return Date</th>
                                              <th>Fine in(USD)</th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                      @foreach($issuedbookes as $ib)

                                          <tr class="odd gradeX">

                                              <td class="center">{{$ib->book->name}}</td>
                                              <td class="center">{{$ib->book->isbnn_number}}</td>
                                              <td class="center">{{$ib->issues_date}}</td>
                                              <td class="center">@if($ib->status==0)
                                              <span style="color:red">
                                              "Not Return Yet"
                                                  </span>
                                              @else
                                              {{$ib->return_date}}
                                            @endif
                                              </td>
                                                <td class="center">{{$ib->fine}}</td>

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
@endsection
