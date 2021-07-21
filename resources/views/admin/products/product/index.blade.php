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
					<td >quantity</td>
					<td >material</td>
					<td >size</td>
					<td >discription</td>
					<td >action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					@if ($product->stocks )
						@foreach ($product->stocks as $stock)
							<tr class="text-center">
								<td>{{$product->id}} </td>
								<td>{{$product->name}} </td>
								<td>{{$product->price}} </td>
								<td>{{$product->subcategory->category->title}} </td>
								<td>{{$product->subcategory->title}} </td>
								<td>{{$stock->color->title}} </td>
								<td>{{$stock->amount}} </td>
								<td>{{$stock->material->title}} </td>
								<td>{{$stock->size->title}} </td>
								<td class="text-wrap"> {{ \Illuminate\Support\Str::limit($product->discription, 50, $end='...') }}</td>
								<td class="d-flex">
									<a href="{{route('admin.products.product.edit',$product->id)}}" class="text-info  d-flex align-items-center">
										<i class="fa fa-pencil-square-o f-24 m-r-15"></i>
									</a>
									<form action="{{route('admin.products.product.destroy',$product->id)}}" method="post">
										@csrf
										@method('delete')
										<button class="text-danger btn btn-link" type="submit">
											<i class="fa fa-trash f-24"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					@endif
				@endforeach
			</tbody>
		</table>
		@if ($products->links())
			{{$products->links()}}
		@endif
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