@extends('layout')

@section('content')

	<h1>All Lists</h1>

<h1>I am apparently doing things.</h1>
<!--

this is iterating through card table and dislaying the title
for each only works on arrays



-->




	@foreach ($lists as $list) 


		<div>
			<a href="/lists/{{$list->path}}" {{$list->title}} </a>
		</div>



	@endforeach




@stop