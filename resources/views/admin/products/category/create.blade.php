@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>Material Form Inputs</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form method="post" class="form-material" action="{{route('admin.products.category.store')}} ">
            @CSRF
            <div class="form-group form-default">
                <input type="text" name="name" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">category Name</label>
            </div>
            <button type="submit" class="btn btn-primary float-right">submit</button>
        </form>
    </div>
</div>
@endsection