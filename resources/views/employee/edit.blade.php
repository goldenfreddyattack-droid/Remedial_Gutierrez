@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">{{ __('Employee Update') }}</h1> 
                    @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 m-auto">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Employee Information</h3>
              </div>
              <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row card-body col-12">
                  <div class="form-group col-12">
                    <label
                        for="exampleInputEmail1">First Name
                    </label>
                        <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require value="{{ $employee->fname}}">
                        @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                  </div>                  
                <div class="form-group col-12">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name"
                  value="{{ $employee->lname}}">
                  @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group col-12">
                    <label for="exampleInputFile">Middle Name</label>
                  <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your Middle Name"
                  value="{{ $employee->mname}}">
                  @error('mname') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address" value="{{ $employee->add}}">
                  @error('add') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Date of birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" placeholder="YYYY-MM-DD" value="{{ $employee->dob}}">
                  @error('dob') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Contact No</label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact No" value="{{ $employee->contact}}">
                  @error('contact') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group col-6">
                  <button type="submit" class="btn btn-success col-12">Update Student Record</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  
@endsection