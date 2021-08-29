@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>{{__('colors.titles.create')}}</h5>
        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
    </div>
    <div class="card-block">
        <form method="post" class="form-material" action="{{route('admin.specifications.color.store')}} ">
            @CSRF
            <div class="form-group form-default">
                <input type="text" name="title" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">{{__('colors.title')}}</label>
            </div>
            <button type="submit" class="btn btn-primary float-right">{{__('app.forms.btn.FormSubmit')}}</button>
        </form>
    </div>
</div>
@endsection