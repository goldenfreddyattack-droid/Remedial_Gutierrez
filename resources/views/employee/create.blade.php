@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @if (session('status'))
              <div class="alert alert-success">{{session('status')}}</div>
          @endif
            <div class="col-6 m-auto">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Add new employee</h3>
                </div>
                <form action="{{ route('employee.store') }}" method="POST">
                  @csrf
                    <div class="row card-body col-12">
                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Firstname</label>
                          <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Middlename</label>
                          <input type="text" class="form-control g-2" id="mname" name="mname" placeholder="Enter your Middlename" require>
                          @error('mname') <span class="text-danger">{{$message}}</span> @enderror
                        </div> 
                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Lastname</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Lastname">
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" class="form-control" id="add" name="add" placeholder="House No. Street Name, Brgy, City">
                          @error('add') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Date of Birth</label>
                          <input type="date" class="form-control" id="dob" name="dob" placeholder="YYYY-MM-DD"> <br>
                          @error('dob') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Contact No</label>
                          <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact No">
                          @error('contact') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-success col-6 m-auto">Submit Student Record</button>
                      </div>
                    </div>
                </form>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
    </div>
@endsection