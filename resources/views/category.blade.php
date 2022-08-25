@extends('template-home.master')
@section('title', 'Category')

@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-9">
			@foreach($products as $product)
			<div class=" row bg-light py-2 pe-4 rounded shadow-lg mb-5">
				<div class="col-lg-4">
				<img src="{{ asset('img/badminton-1.jpg') }}" class="img-thumbnail" width="100%">
				</div>
				<div class="col-lg-8 d-flex flex-column justify-content-evenly">
					<h5>{{ $product->name }}</h5>
					<small>{{ $product->excerpt }}</small>
					<div class="d-flex justify-content-evenly" style="width: 40%">

						<a href='{{ url("/product/{$product->slug}") }}' class="badge bg-success text-decoration-none" style="width: 130px;letter-spacing: 2px">Selengkapnya...</a>
					   
					   <button class="badge bg-warning border-0"><i class="bi bi-eye" style="color: #fff;font-size: 18px;"></i></button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection