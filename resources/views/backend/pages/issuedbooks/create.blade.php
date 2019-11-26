@extends('backend.layouts.master')

@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Issued Book
        </div>
                <div class="card-body">
                @include('backend.partials.messages')
              <form role="form" method="post" action="{!! route('admin.issuedbook.store') !!}">
                @csrf
                <div class="form-group">
                  <label>Srtudent id<span style="color:red;">*</span></label>
                  <input class="form-control" type="text" name="studentid" id="studentid" onBlur="getstudent()" autocomplete="off"  required />
                  </div>

                  <div class="form-group">
                    <select  class="form-control" name="studentid" id="get_student_name" readonly>
                      <option value="">Selected Student</option>
                   </select>
                  </div>

                  <div class="form-group">
                  <label>ISBN Number or Book Title<span style="color:red;">*</span></label>
                  <input class="form-control" type="text" name="booikid" id="bookid" onBlur="getbook()"  required="required" />
                  </div>

                   <div class="form-group">

                    <select  class="form-control" name="bookid" id="get_book_name" readonly>
                      <option value="">Selected Book</option>
                   </select>
                   </div>
                  <button type="submit" name="issue" id="submit" class="btn btn-info">Issue Book </button>

                </form>

                                                                </div>
                                                            </div>
                                                      </div>
                                                      </div>
                                                    @endsection
