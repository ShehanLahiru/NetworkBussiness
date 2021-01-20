@extends('backend.layouts.app', [
'namePage' => 'products',
'class' => 'sidebar-mini',
'activePage' => 'products',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('product.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Create Product</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_create" method="post" action="{{ route('product.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="name">{{__("Name")}}</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="description">{{__("Link")}}</label>
                                    <textarea type="text" rows="20" name="link" class="form-control"
                                        style="border:1px solid #E3E3E3" required>{{ old('link') }}</textarea>
                                    @include('backend.alerts.feedback', ['field' => 'link'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="category">{{__("Category")}}</label>
                                    <select name="category" class="form-control"  style="border:1px solid #E3E3E3"required>
                                        @foreach ($categories as $category )
                                        <option value={{ $category->id}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @include('backend.alerts.feedback', ['field' => 'category'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label class="d-block" for="title">{{__(" Image")}}</label>
                                    <img class="gal-img prev_img" id="prev_img" src="{{asset('assets/img/dummy.jpg')}}">
                                    <input type="file" class="custom-file-input" name="image" id="custom-file-input" required>
                                    @include('backend.alerts.feedback', ['field' => 'image'])
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label class="d-block" for="title">{{__(" Image")}}</label>
                                    <img class="gal-img prev_img" id="prev_img" src="{{asset('assets/img/dummy.jpg')}}">
                                    <input type="file" class="custom-file-input" name="image" id="custom-file-input">
                                    @include('backend.alerts.feedback', ['field' => 'image'])
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Create')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#riddle_create') !!}--}}
@endsection

