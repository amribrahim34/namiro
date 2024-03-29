@extends('layouts.admin')
@section('content')

<div class="card w-100">
	<div class="card-header d-flex justify-content-between">
		<h3>{{__('materials.titles.index')}}</h3>
		<a href="{{route('admin.specifications.material.create')}}" class="btn btn-primary btn-round text-white">{{__('materials.titles.create')}}</a>
	</div>
	<div class="card-body">
		@if($materials->count() >0)
		<table id="DataTable" class="w-100">
			<thead>
				<tr class="">
					<td >#</td>
					<td >{{__('materials.title')}}</td>
					<td >التحكم</td>
				</tr>
			</thead>
			<tbody>
				@foreach($materials as $material)
				<tr>
					<td>{{$material->id}} </td>
					<td>{{$material->title}} </td>
					<td class="d-flex">
						<a href="{{route('admin.specifications.material.edit',$material->id)}}" class="text-info  d-flex align-items-center">
							<i class="fa fa-pencil-square-o f-24 m-r-15"></i>
						</a>
						<form action="{{route('admin.specifications.material.destroy',$material->id)}}" method="post">
							@csrf
							@method('delete')
							<button class="text-danger btn btn-link" type="submit">
								<i class="fa fa-trash f-24"></i>
							</button>
						</form>
					</td>
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