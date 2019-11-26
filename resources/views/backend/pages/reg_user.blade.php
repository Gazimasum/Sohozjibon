@extends('backend.layouts.master')
@section('content')

  <div class="main-panel">
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

                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email id </th>
                        <th>Mobile Number</th>
                        <th>Reg Date</th>
                        <th>Status</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                                                    <tbody>

                @foreach($users as $u)

                <tr class="odd gradeX">
                    <td class="center">{{$u->student_id}}</td>
                    <td class="center">{{$u->name}}</td>
                    <td class="center">{{$u->email}}</td>
                    <td class="center">{{$u->phone_no}}</td>
                     <td class="center">{{$u->created_at}}</td>
                    <td class="center">
                      @if($u->status==0)
                  Active
                @else
                  Blocked
                @endif
                    </td>
                    {{-- <td class="center">
                @if($u->Status==1)

                <a href="reg-students.php?inid={{$u->id}}" >  <button class="btn btn-danger"> Inactive</button>
                @else

                  <a href="reg-students.php?id={{$u->id}}" ><button class="btn btn-primary"> Active</button>
                @endif

                                                            </td> --}}
                                                        </tr>
                @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <!--End Advanced Tables -->
                                </div>
                              @endsection
