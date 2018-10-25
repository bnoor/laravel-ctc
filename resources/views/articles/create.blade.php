@extends('default')

@section('main')
<div class ="container">
	@if($errors->any())
		<div class = "alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
<form action="/articles/store" method="POST">
	@csrf
	<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' :''}}" placeholder="Name" value= "{{ old('name') }}"><br>
	<input type="date" name="published_at" class="form-control {{ $errors->has('published_at') ? 'is-invalid' :''}}" placeholder="Date" value ="{{ old('published_at')}}"><br>
	<textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' :''}}" placeholder="Text">{{ old('body')}}</textarea>	<br>
	<button class ="btn btn-info">Add</button>
</form>
</div@endsection