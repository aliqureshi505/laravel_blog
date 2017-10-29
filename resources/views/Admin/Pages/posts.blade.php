@extends('Admin.layouts.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header -->
  <section class="content-header">
    <h1>
    Create New Post
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      
      <li class="active">Create Post</li>
    </ol> </section>

  <div class="col-md-12">
    <div class="box box-primary">
      
      <form role="form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" >

        

        {{csrf_field()}}
        <div class="box-body">
              @if(session()->has('message'))
          <p class="alert alert-success">
             {{ session()->get('message') }}
          </p>      
              @endif           
          
          <div class="form-group">
            <label for="exampleInputEmail1">Post Title:</label>
            <input type="text" class="form-control" name="post_title"  placeholder="Enter Post Title">
            @if($errors->has('post_title'))
            <p class="alert alert-danger"> {{ $errors->first() }} </p>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Post Slug Name:</label>
            <input type="text" class="form-control" name="post_slug" placeholder="Post Slug Name">
            @if($errors->has('post_title'))
            <p class="alert alert-danger"> {{ $errors->first() }} </p>
            @endif
          </div>


          <div class="form-group">
                <label>Select Category:</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]" >
                 @foreach($category as $categories)
                    <option value="{{ $categories->id }}" >{{ $categories->name }}</option>    
                  @endforeach
                  
                  
                </select>
              </div>


              <div class="form-group">
                <label>Select Tags:</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Tags" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]" >
               
                  @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" >{{ $tag->name }}</option>    
                  @endforeach
                   </select>
              </div>


              
          <div class="form-group">
            <label for="exampleInputFile">Choose Image:</label>
            <input type="file" name="post_image" id="exampleInputFile">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="post_publish" > Publish
            </label>
          </div>
        

        <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Post Content</b>
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea class="textarea" name="post_content" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                @if($errors->has('post_title'))
            <p class="alert alert-danger"> {{ $errors->first() }} </p>
            @endif
              
              <button  class="btn btn-primary">Create Post</button>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
     
    </section>
    

        <!-- /.box-body -->
        
      </div>
    </form>
    </div>
    <!-- Main content -->
    <!-- /.content -->
  </div>




</div>
  <!-- /.content-wrapper -->
  @endsection