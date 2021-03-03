@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>Material Form Inputs</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form method="post" class="form-material" action="{{route('admin.products.subcategory.store')}} ">
            @CSRF
            <div class="form-group form-default">
                <select class="form-control" name="category_id">
                    @if($categories->count() > 0)
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <input type="text" name="title" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">subcategory Name</label>
            </div>
            <button type="submit" class="btn btn-primary float-right">submit</button>
        </form>
    </div>
</div>
@endsection
{{-- including select2 files --}}
@section('css')
    @parent
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('js')
    @parent
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
@endsection