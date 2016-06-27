@extends('layout')

@section('content')

	<div class = "row">


		<div class ="col-md-6 col-md-offset-3">
			<h1>{{ $list->title }}</h1>


		<ul class = "list-group">

			@foreach ($list->items as $item)

			<!--
			CHECK ROUTE FOR INFORMATION TO SET A HYPERLINKE
			-->

				<li class = "list-group-item"><a href="/notes/{{$note->id}}/edit"> {{ $note->body }}</li>

			@endforeach
		</ul>
	</div>
</div>

<hr>
<h3>Add a note</h3>


<form method = "POST" action = "/cards/{{ $card->id }}/notes">
<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">


	<div class="form-group">


		<textarea name= "body" class="form-control"></textarea>

	</div>

	<div class = "form-group">
		<button type ="submit" class="btn btn-primary">Add Note</button>
		</div>

</form>				

@stop

	