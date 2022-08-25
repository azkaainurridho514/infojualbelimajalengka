@extends('template-home.master')
@section('title', '')

@section('content')
<div class="container-fluid">
	<div class="row my-5">
		<div class="col-md-6 mx-auto my-3">
			@foreach($products as $product)
			<p class="text-center">{{ $product->name }}</p>
			@endforeach
		</div>
	</div>
</div>
@endsection