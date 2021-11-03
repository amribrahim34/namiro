@extends('layouts.app')
@section('page-name')
    تسجيل الدخول
@endsection
@section('content')
        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <input type="text" name="email" placeholder="البريد الالكتروني">
                                        <input type="password" name="password" placeholder="كلمة المرور">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" name="remember">
                                                <label>تذكرني</label>
                                                <a href="{{route('password.request')}}"> نسيت كلمة المرور ؟ </a>
                                            </div>
                                            <button type="submit" class="default-btn floatright">تسجيل الدخول </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login-area end -->
@endsection
