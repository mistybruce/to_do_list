@extends('layout')

@section('content')


<h1>Edit that note</h1>


<form method = "POST" action = "/items/{{$item->id}}">
{{method_field('PUT')}}


<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">


	<div class="form-group">


		<textarea name= "body" class="form-control">{{ $item->body }}</textarea>

	</div>

	<div class = "form-group">
		<button type ="submit" class="btn btn-primary">Update that Item</button>
		</div>

</form>		

@stop