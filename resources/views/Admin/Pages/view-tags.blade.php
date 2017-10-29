@extends('Admin.layouts.index')
@section('content')



  


<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View All Categories
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories</a></li>
        <li class="active">All Categories</li>
      </ol>    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              @if(session()->has('messaage'))
                <p class="alert alert-success"> {{ session()->get('messaage') }} </p>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Tas Name:</th>
                  <th>Tag Slug:</th>
                  <th>Action:</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($records as $data)
                    <tr>
                      <td>{{ $loop->iteration  }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->slug }}</td>
                      <td>
                        <a href="{{ route('tags.edit', $data->id) }}">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
                        </a>  

                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp; Edit</button>

                    </td>
                      <!-- <td><button class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button></td>
                      <td><button class="btn btn-primary btn-md"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button></td> -->
                    </tr>
                  @endforeach
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



    <!-- /.content --> 
     </div>



 @endsection