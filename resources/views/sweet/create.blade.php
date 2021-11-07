@extends('layouts.layout')


@section('head')
<link rel="stylesheet" href="{{asset('css/style_add.css')}}" type="text/css">

<title>Add sweet</title>
@stop

@section('content')

<div class="row">
	<div class="add_product">
		<div class="col-12">
			<form method="post" action="{{ URL('sweet/store') }}" enctype="multipart/form-data">
				@csrf

				<div class="info">


					@if( !(empty($errors->get('name'))) )
					<div class="alert alert-danger" style="margin-bottom:0px;">
						<ul>
							@foreach ($errors->get('name') as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<div class="form-group">
						<label>Sweet name:</label>
						<input type="text" name="name" class="form-control">
					</div>


					@if( !(empty($errors->get('price'))) )
					<div class="alert alert-danger" style="margin-bottom:0px;">
						<ul>
							@foreach ($errors->get('price') as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<div class="form-group">
						<label>Sweet price:</label>
						<input type="number" name="price" class="form-control">
					</div>


					@if( !(empty($errors->get('quantity'))) )
					<div class="alert alert-danger" style="margin-bottom:0px;">
						<ul>
							@foreach ($errors->get('quantity') as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<div class="form-group">
						<label>Sweet quantity:</label>
						<input type="number" name="quantity" class="form-control">
					</div>


					@if( !(empty($errors->get('image'))) )
					<div class="alert alert-danger" style="margin-bottom:0px;">
						<ul>
							@foreach ($errors->get('image') as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					
					<div class="form-group">
						<label>Sweet image:</label>
						<input type="file" name="image" class="form-control">
					</div>

				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</div>

</div>
@stop