@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>{{__('subcategories.titles.edit')}}</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form method="post" class="form-material" action="{{route('admin.products.subcategory.update',$subcategory->id)}} ">
            @CSRF
            @method('put')
            <div class="form-group form-default">
                <select class="form-control" name="category_id">
                    <option  disabled selected> {{__('subcategories.category_id')}}</option>
                    @if($categories->count() > 0)
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" @if ($subcategory->category->exists() && $subcategory->category_id == $category->id) selected @endif > {{$category->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group form-default">
                <input type="text" name="title" value="{{$subcategory->title}}" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">{{__('subcategories.title')}}</label>
            </div>
            <button type="submit" class="btn btn-primary float-right">submit</button>
        </form>
    </div>
</div>
@endsection