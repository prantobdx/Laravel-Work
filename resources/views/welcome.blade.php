@extends('Layouts.main')
@section('content')

<div width=device-width initial-scale=1>
	<h1> Home page </h1>

	@if (session('successMsg'))

	<div class="alert alert-success" role="alert">
		{{session('successMsg')}}
	</div>

	@endif

</div>
@endsection
