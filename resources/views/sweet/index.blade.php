@extends('layouts.layout')

@section('head')
<link rel="stylesheet" href="{{asset('css/style_products.css')}}" type="text/css">
<title>Sweets</title>
@stop


@section('content')
<main>
	<div class="products content-wrapper">

		<h1>Sweets</h1>
		<div class="products" style="margin-left: 50px;">
			<div class="products-wrapper">
				@foreach($sweets as $sweet)
				<a class="product">
					<img src="{{asset('uploads/'.$sweet->image)}}" width="200" height="200" alt="{{$sweet->name}}">
					<h5 class="name">{{$sweet->name}}</h5>
				</a>
				@endforeach
			</div>
		</div>
		
	</div>
</main>
@stop
