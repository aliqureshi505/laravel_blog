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
              <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('category.store')}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                @if(session()->has('message'))
                    <p class="alert alert-success">{{ session()->get('message') }} Click  <a href="{{ route('category.index') }}">here</a> to View </p>
                @endif
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Name:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                    @if($errors->has('category_name'))
                      <p class="alert alert-danger">{{ $errors->first() }}</p>
                  @endif
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Slug:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_slug" placeholder="Category Slug Name">
                    @if($errors->has('category_slug'))
                      <p class="alert alert-danger">{{ $errors->first() }}</p>
                  @endif
                    			<br>
                             <button type="submit" class="btn btn-info ">Save Cahnges</button>
                  </div>

                </div>

                
                             </div>
              <!-- /.box-body -->
              </div>
              <!-- /.box-footer -->

            </form>
          </div>
       











    </section>

        </div>
        

@endsection