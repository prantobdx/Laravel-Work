@extends('Layouts.main')
@extends('Layouts.main')

@section('content')



<h1>Edit and Update-Page</h1><br><br>
<!-- Default form register -->
<div class="container" width=device-width initial-scale=1>

@if ($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-danger">
 {{$error}} </div>

@endforeach
@endif

<form class="text-center border border-light p-5" action="{{ route('update',$student->id)}}" method="post">




    <p class="h4 mb-4">Add Student</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" Name="firstname" value="{{$student->first_name}}">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" Name="lastname" value="{{$student->last_name}}">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" Name="email" value="{{$student->email}}">

    <!-- Password -->

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" Name="phone" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="{{$student->phone}}">



  @csrf

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Update</button>

    <!-- Social register -->
    <!-- Terms of service -->

</form>
<!-- Default form register -->
</div>


@endsection