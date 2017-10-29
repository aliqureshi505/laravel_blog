@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
	<br><br>
	<center>
		<h3>Are you sure you want to erase all data of your blog ?</h3>
		<p>Note: Once it proceed the data will not be able to rollback again</p>

		<form action="reset/proceed" method="POST">
			{{ csrf_field()  }}
			  <button  class="btn btn-danger">Proceed To Erase Data:</button>
			
		</form>
	</center>
</div>

@endsection