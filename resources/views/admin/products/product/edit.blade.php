@extends('layouts.admin')
@section('content')

<div class="card w-100">
    <div class="card-header">
        <h5>{{__('products.titles.edit')}}</h5>
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
        <form class="form-material" method="POST" action="{{route('admin.products.product.store')}}" enctype="multipart/form-data" >
            @CSRF
            @method('put')
            <div class="form-group form-default">
                <input type="file" name="cover" id="" class="form-control">
            </div>
            <div class="form-group form-default">
                <select class="form-control select2" name="subcategory_id" >
                    <option  disabled="">اختر {{__('products.subcategory_id')}}</option>
                    @if($subcategories->count() > 0)
                    @foreach($subcategories as $subcategory)
                        <option value="{{$subcategory->id}}" @if ($product->subcategory_id == $subcategory->id) selected='' @endif>{{$subcategory->category->title}}/{{$subcategory->title}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            
            <div class="form-group form-default">
                <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">{{__('products.name')}}</label>
            </div>
            <div class="form-group form-default">
                <input type="number" name="price" class="form-control" value="{{old('price',$product->price)}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">{{__('products.price')}} </label>
            </div>
            {{-- <div class="form-group form-default">
                <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}" required="">
                <span class="form-bar"></span>
                <label class="float-label">Product Quantity</label>
            </div> --}}
            <div class="form-group form-default">
                <textarea name="discription" class="form-control" required="">
                    {{old('discription',$product->discription)}}
                </textarea>
                <span class="form-bar"></span>
                <label class="float-label">{{__('products.discription')}}</label>
            </div>
            @if ($product->stocks->count() > 0)
                @foreach ($product->stocks as $stock)
                    <div data-repeater-list="group">
                        <div data-repeater-item class="form-group row mb-5">
                            <div class="form-group form-default col-md-3">
                                <select class="form-control select2" name="color_id" >
                                    <option selected="" disabled="">ختر {{__('products.color_id')}}</option>
                                    @if($colors->count() > 0)
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}" @if($stock->color_id == $color->id) selected=""  @endif> {{$color->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group form-default col-md-3">
                                <select class="form-control select2" name="material_id" >
                                    <option selected="" disabled="">{{__('products.material_id')}}</option>
                                    @if($materials->count() > 0)
                                    @foreach($materials as $material)
                                    <option value="{{$material->id}}"> {{$material->title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>  
                            <div class="form-group form-default col-md-3">
                                <select class="form-control select2" name="size_id" >
                                    <option selected="" disabled="">اختر {{__('products.size_id')}}</option>
                                    @if($sizes->count() > 0)
                                    @foreach($sizes as $size)
                                    <option value="{{$size->id}}"> {{$size->title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group form-default col-md-2">
                                <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}" required placeholder="{{__('products.quantity')}}">
                            </div>
                            <div class="row">
                                <div>
                                    <input type="file" name="" id="" class="dropzone">
                                </div>
                            </div>
                            <input data-repeater-delete type="button" value="{{__('app.forms.btn.delete')}}" class="btn btn-danger "/>
                        </div>
                    </div>
                @endforeach
            @endif
            <button type="button" class="btn btn-primary" data-repeater-create="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> {{__('app.forms.btn.add')}}
            </button>
            <button class="btn btn-primary float-right">{{__('app.forms.btn.FormSubmit')}}</button>
        </form>
    </div>
</div>
@endsection
{{-- including select2 files --}}
@section('css')
    @parent
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="{{asset('assets/megable/js/dropzone-5.7.0/dropzone.min.css')}}"></script>
@endsection
@section('js')
    @parent
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{asset('assets/megable/js/jquery.repeater.min.js')}}"></script>
        <script src="{{asset('assets/megable/js/dropzone-5.7.0/dropzone.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2();
                $('form').repeater({
                    show: function () {
                        $(this).slideDown();
                        $('.select2-container').remove();
                        $('.select2').select2({
                            placeholder: 'اختر'
                        });
                        $('.select2-container').css('width','100%');
                    },
                    // hide: function (remove) {
                    //     if(confirm('Confirm Question')) {
                    //     $(this).slideUp(remove);
                    //     }
                    // }
                });
                Dropzone.options.myAwesomeDropzone = {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    accept: function(file, done) {
                        if (file.name == "justinbieber.jpg") {
                        done("Naha, you don't.");
                        }
                        else { done(); }
                }
                };      
            });
        </script>
@endsection