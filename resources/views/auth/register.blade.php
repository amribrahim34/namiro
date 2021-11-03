@extends('layouts.app')

@section('page-name')
    تسجيل
@endsection
@section('content')
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
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
                        <div class="login-form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <input type="text" name="name" value="{{old('name')}}" placeholder="الاسم">
                                <input type="password" name="password" placeholder="كلمة المرور">
                                <input type="password" name="password_confirmation" placeholder=" تأكيد كلمة المرور">
                                <input name="email" value="{{old('password')}}" placeholder="البريد الالكتروني" type="email">
                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">تسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
