@extends('layouts.admin')

@section('content')
    
      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Gallery Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        <!-- Main row -->
        <div class="row">
        
            <table class="table table-bordered text-center" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Travel</th>
                        <th>Customer</th>
                        <th>Visa</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nama Travel</td>
                        <td>Customer</td>
                        <td>Visa</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>
                            <a href="#" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
                            <a href="#" class="btn btn-primary"> <i class="fa fa-pencil-alt"></i> </a>

                            <form class="d-inline" action="#" method="post">
                                <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection