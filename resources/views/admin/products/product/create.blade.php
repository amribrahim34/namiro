@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>Material Form Inputs</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form class="form-material">
            <div class="form-group form-default">
                <input type="text" name="name" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Name</label>
            </div>
            <div class="form-group form-default">
                <input type="text" name="price" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Price</label>
            </div>
            <div class="form-group form-default">
                <textarea name="discreption" class="form-control" required=""></textarea>
                <span class="form-bar"></span>
                <label class="float-label">Text area Input</label>
            </div>
            <button class="btn btn-primary float-right">submit</button>
        </form>
    </div>
</div>
@endsection