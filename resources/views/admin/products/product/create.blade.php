@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>Material Form Inputs</h5>
    </div>
    @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-block">
        <form class="form-material" method="POST" action="{{route('admin.products.product.store')}}">
            @CSRF
            <div class="form-group form-default">
                <select class="form-control select2" name="category_id" >
                    <option selected="" disabled="">select category</option>
                    @if($categories->count() > 0)
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <select class="form-control select2" name="subcategory_id" >
                    <option selected="" disabled="">select subcategory</option>
                    @if($subcategories->count() > 0)
                    @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}"> {{$subcategory->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <select class="form-control select2 h-25" name="color_id" multiple="multiple">
                    <option selected="" disabled="">select colors</option>
                    @if($colors->count() > 0)
                    @foreach($colors as $color)
                    <option value="{{$color->id}}"> {{$color->name}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <select class="form-control select2" name="material_id" >
                    @if($materials->count() > 0)
                    @foreach($materials as $material)
                    <option value="{{$material->id}}"> {{$material->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>  
            <div class="form-group form-default">
                <select class="form-control select2" name="size_id" multiple="multiple">
                    @if($sizes->count() > 0)
                    @foreach($sizes as $size)
                    <option value="{{$size->id}}"> {{$size->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <input type="text" name="name" class="form-control" value="{{old('name')}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Name</label>
            </div>
            <div class="form-group form-default">
                <input type="number" name="price" class="form-control" value="{{old('price')}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Price</label>
            </div>
            <div class="form-group form-default">
                <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Quantity</label>
            </div>
            <div class="form-group form-default">
                <textarea name="discription" class="form-control" required="">
                    {{old('discription')}}
                </textarea>
                <span class="form-bar"></span>
                <label class="float-label">Product Discreption </label>
            </div>
            <button class="btn btn-primary float-right">submit</button>
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