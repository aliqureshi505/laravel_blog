
@extends('blog.layout.single-post-layout')
@section('post_title', $slug->Ttile)
@section('created_at', $slug->created_at->diffForHumans() )


@section('post_content')
<img src="{{Storage::disk('local')->url($slug->image) }}" height="300px" >
<br><br>
{!!  htmlspecialchars_decode($slug->content) !!}

@endsection


@section('tags')
	@foreach($slug->tags as $tag)
	<a href="">{{ $tag->name }}</a>
	@endforeach
@endsection



@section('categories')
	@foreach($slug->categories as $category)
	<a href="">{{ $category->name }}</a>
	@endforeach
@endsection


