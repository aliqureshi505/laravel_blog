@extends('Admin.layouts.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    View All Posts
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Posts</a></li>
      <li class="active">All Posts</li>
    </ol>    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              @if(session()->has('message'))
              <p class="alert alert-success">{{  session()->get('message') }}</p>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Title:</th>
                   
                    <th>Slug:</th>
                    <th>Image:</th>
                    <th>Published:</th>
                    <th>Craeted At:</th>
                    <th>Actions:</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($records as $data)
                  <tr>
                    <td>{{ $loop->iteration  }}</td>
                    <td>{{ $data->Ttile }}</td>
                    
                    <td>{{ $data->slug }}</td>
                    <td>  <img src="{{Storage::disk('local')->url( $data->image) }}" height="50px" width="50px" > </td>
                    <td>{{ $data->slug }}</td>
                    <td>{{ $data->created_at->diffForHumans() }}</td>
                    
                    
                    <td>
                      
                      <a href="{{ route('post.edit', $data->id) }}" >
                        <button class="btn btn-primary btn-sm "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
                      </a>
                      
                      <form  action="{{ route('post.destroy', $data->id) }}" style="display: inline-block;" method="POST">
                        {{csrf_field()}} {{ method_field('DELETE') }}
                        
                        <button onclick="confirm('Are you sure  you want to delet this record ?')"  class="btn btn-danger btn-sm "><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp; Delete</button>
                        
                        
                      </form>
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