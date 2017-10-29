@extends('Admin.layouts.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
    <div class="col-md-8 col-md-offset-2" >
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Tags</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        
        <div class="box-body">
          <form class="form-horizontal" action="{{ route('tags.store') }}" method="POST">
            {{csrf_field()}}
            @if(session()->has('messaage'))
              
            <p class="alert alert-success">{{ session()->get('messaage') }} Click <a href="{{ route('tags.index') }}"> here  </a>to view </p>
            @endif
            
            <div class="form-group">
              
              <label for="inputEmail3" class="col-sm-2 control-label">Tag Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tag_name" placeholder="Tag Name">
                @if($errors->has('tag_name'))
                <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Tag Slug:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tag_slug" placeholder="Tag Slug Name">
                @if($errors->has('tag_slug'))
                <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <br>
                <button type="submit" class="btn btn-info ">Save Cahnges</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box-footer -->
    </div>
    
  </section>
</div>

@endsection