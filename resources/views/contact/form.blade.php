@extends('layouts.master')

@section('content')

<style type="text/css">
	dt{
		font-size:75%;
	}
</style>

<div class="jumbotron jumbotron-fluid m-3 p-4">
	<div class="container">
		<h1 class="display-5">Please fill in your details below</h1>
		<p class="lead">This information won't be used for any nefarious purposes</p>
	</div>
</div>

<div class="container-fluid mb-5">
	@if ($errors->any())
	<div class="alert bg-danger alert-dismissible fade show text-light py-2">
		
		<dl class="mb-0">
			<dd><strong>Oh No!</strong> Let's try that again. Here's what needs fixing:</dd>
			
				@foreach ($errors->all() as $error)

					<dt>{{ $error}}</dt>
				
				@endforeach

		</dl>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	@endif
	{!! Form::open(['url' => 'contact', 'method' => 'POST'])!!}


  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control w-25" id="name" name="name" placeholder="Chris Baker" value="{{ old('name') }}" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control w-25" id="email"  name="email" placeholder="example@website.com" value="{{ old('email') }}" required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control w-75" id="message" name="message" placeholder="Please send us a message..." required>{{ old('message') }}</textarea> 
  </div>

  <button type="submit" class="btn btn-primary my-1">Submit</button>


	{!! Form::close() !!}

	
</div>


@endsection