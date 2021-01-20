@extends('backend.layouts.app', [
'namePage' => 'productCategory',
'class' => 'sidebar-mini',
'activePage' => 'productCategory',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('productCategory.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Update Product Category</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post" action="{{ route('productCategory.update', $productCategory->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="title">{{__(" Name ")}}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name',$productCategory->name) }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label class="d-block" for="image">{{__(" Image")}}</label>
                                    <img class="gal-img prev_img" id="prev_img2"
                                        src="{{$productCategory->image_url!=null?$productCategory->image_url:('assets/img/dummy.jpg')}}">
                                    <input type="file" class="custom-file-input2" name="image" id="custom-file-input2"required>
                                    @include('backend.alerts.feedback', ['field' => 'image'])
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection

