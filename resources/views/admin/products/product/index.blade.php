@extends('layouts.admin')
@section('content')

<div class="card w-100">
	<div class="card-header d-flex justify-content-between">
		<h3>products list</h3>
		<a href="{{route('admin.products.product.create')}}" class="btn btn-primary btn-round text-white">Create New</a>
	</div>
	<div class="card-body">
		@if($products->count() >0)
		<table id="DataTable" class="w-100">

			<thead>
				<tr class="">
					<td >#</td>
					<td >Name</td>
					<td >price</td>
					<td >category</td>
					<td >subcategory</td>
					<td >color</td>
					<td >material</td>
					<td >size</td>
					<td >discription</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{$product->id}} </td>
					<td>{{$product->name}} </td>
					<td>{{$product->price}} </td>
					<td>{{$product->subcategory->category->title}} </td>
					<td>{{$product->subcategory->title}} </td>
					<td>{{$product->color->name}} </td>
					<td>{{$product->material->name}} </td>
					<td>
						@foreach ($product->sizes as $size)
							<span class="badge badge-primary mx-2 px-2">
								{{$size->title}}
							</span>
						@endforeach
					</td>
					<td>{{$product->discription}} </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>	

@endsection
@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/b-flash-1.6.5/fh-3.1.8/datatables.min.css"/>
@endsection
@section('js')
	@parent
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/b-flash-1.6.5/fh-3.1.8/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#DataTable').DataTable();
		});
	</script>
@endsection