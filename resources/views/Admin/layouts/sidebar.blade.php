<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      
      <li class="treeviewa"  >
        <a   href="/admin/post">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>Home </span>
          
        </a>
      </li>
      <li class="treeview" >
        <a href="/admin/post">
          <i class="fa fa-file" aria-hidden="true"></i>
          <span>Posts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
              <li><a href="{{route('post.create')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Post</a></li>
              <li ><a href="{{route('post.index')}}"><i class="fa fa-eye" aria-hidden="true"></i> View All Posts</a></li>
            </ul>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="/admin/category">
          <i class="fa fa-cubes" aria-hidden="true"></i> <span>Categories</span>
          <span class="pull-right-container">
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
              <li><a href="{{ route('category.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Category</a></li>
              <li><a href="{{route('category.index')}}"><i class="fa fa-eye" aria-hidden="true"></i> View All Categories</a></li>
            </ul>
            
          </a>
        </li>
        <li class="treeview">
          <a href="/admin/tags">
            <i class="fa fa-tags" aria-hidden="true"></i> <span>Tags</span>
            <span class="pull-right-container">
            </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <ul class="treeview-menu">
                <li><a href="{{ route('tags.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Tag</a></li>
                <li><a href="{{ route('tags.index') }}"><i class="fa fa-eye" aria-hidden="true"></i> View All Tags</a></li>
              </ul>
            </a>
          </li>
          <li >
            <a href="/admin/user-roles">
              <i class="fa fa-users" aria-hidden="true"></i> <span>User & Roles</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li >
            <a  href="/admin/user-roles">
              <i class="fa fa-sign-out" aria-hidden="true"></i> <span >LogOut Me</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li >
            <br><br><br><br>
            <center>
            <a href="reset"><button  class="btn btn-danger"> <i class="fa fa-recycle" aria-hidden="true"></i> Reset All Data:</button></a>
            </center>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    