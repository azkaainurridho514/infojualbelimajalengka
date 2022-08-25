@extends('template-home.master')
@section('title', 'Category')

@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-10 mx-auto card py-2">
			<img src="{{ asset('img/badminton-1.jpg') }}" class="img-thumbnail">
			<h4 class="text-center mt-3">{{ $product->name }}</h4>
			<p class="mt-3 px-5">{{ $product->body }}</p>
		</div>
	</div>
</div>
@endsection