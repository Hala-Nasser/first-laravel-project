@extends('layouts.layout')

@section('head')
<title>Home</title>
@stop

@section('content')

<main>
	<img src="/assets/bg.png" class="bg">
	<div class="mostexclusive content-wrapper">
		<h2>Most Exclusive</h2>

		<div class="products">
			@foreach ($sweets as $sweet)
			<div class="product">
				<img src="{{asset('uploads/'.$sweet->image)}}" width="200" height="200" alt="{{$sweet->name}}">
				<h5 class="name">{{$sweet->name}}</h5>
			</div>
			@endforeach
		</div>
	</div>
	</main>

	@stop