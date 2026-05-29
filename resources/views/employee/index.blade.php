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
            <a href="{{ route('employee.create') }}" class="btn btn-info">Add New Employee</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                          @foreach ($employee as $items)
                                        <tr>
                                            <td>{{ $items->id }}</td>
                                            <td>{{ $items->fname }}</td>
                                            <td>{{ $items->lname }}</td>
                                            <td>{{ $items->mname }}</td>
                                            <td>{{ $items->add }}</td>
                                            <td>{{ $items->dob }}</td>
                                            <td> 
                                                <a href="{{ route('employee.edit', $items->id) }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                               <form action="{{ route('employee.delete', $items->id) }}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger btn-md">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection