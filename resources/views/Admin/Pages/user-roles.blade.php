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
              <h3 class="box-title">Users and Roles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Name:</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Category Name">
                  </div>
                </div>


                 



                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Password:</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Category Slug Name">

                   
                
                    			
                  </div>

                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Role:</label>

                  <div class="col-sm-10">
                    <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
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