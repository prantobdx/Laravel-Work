@extends('Layouts.main')
@section('content')

<h1> Read inserted data </h1>

<div class="mt-5">
<div class="container"width="device-width" initial-scale=1>

@if (session('successMsg'))

<div class="alert alert-success" role="alert">
  {{session('successMsg')}}
</div>

@endif

<table class="table">
  <thead class="orange white-text">
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($student as $student)

<tr>
	<th scope="row">{{$student->id}}</th>
	<td>{{ $student->first_name }}</td>
	<td>{{ $student->last_name}}</td>
	<td>{{ $student->email }}</td>
	<td>{{ $student->phone }}</td>

	<td><a class="btn btn-raised btn-primary btn-sm" href="{{route('edit', $student->id)}}"> <i class="fa fa-pencil-square-o " > </i> </a>

		||
		<form method="post" id=" delete-form-{{$student->id}}"action="{{route('delete',$student->id)}}" style="display: none;">
			@csrf
			{{method_field('delete')}}
		</form>


		<button onclick="if (confirm('are you sure to delete this data?'))
		{
			event.preventDefault();
			document.getElementById('delete-form-{{$student->id}}').submit();
		}

		else{
			event.preventDefault();
		}"


		class="btn btn-raised btn-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i>
	</button>


</td>
</tr>
@endforeach

</tbody>
</table>

</div>
</div>
@endsection